<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisit
{
    /**
     * Paths to exclude from tracking (assets, API, admin, etc.).
     */
    protected array $excludedPaths = [
        'analytics*',
        'locale/*',
        'sitemap.xml',
        'favicon*',
        '_debugbar*',
        'livewire*',
    ];

    /**
     * Bot user-agent keywords to exclude.
     */
    protected array $bots = [
        'bot', 'crawl', 'spider', 'slurp', 'mediapartners',
        'facebookexternalhit', 'linkedinbot', 'twitterbot',
        'whatsapp', 'telegram', 'preview', 'fetch', 'lighthouse',
        'pagespeed', 'gtmetrix', 'pingdom', 'uptimerobot',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only track GET requests that return HTML (not redirects, errors, etc.)
        if (
            $request->method() !== 'GET'
            || $response->getStatusCode() >= 300
            || $this->isExcluded($request)
            || $this->isBot($request)
        ) {
            return $response;
        }

        // Fire & forget — don't slow down the response
        try {
            $this->recordVisit($request);
        } catch (\Throwable $e) {
            // Silently fail — analytics should never break the site
            report($e);
        }

        return $response;
    }

    protected function recordVisit(Request $request): void
    {
        $referrer       = $request->header('referer');
        $referrerDomain = $referrer ? parse_url($referrer, PHP_URL_HOST) : null;

        // Don't count internal navigation as referral
        if ($referrerDomain && str_contains($referrerDomain, 'frecorp.fr')) {
            $referrerDomain = null;
            $referrer       = null;
        }

        $utmSource  = $request->query('utm_source');
        $utmMedium  = $request->query('utm_medium');
        $utmCampaign = $request->query('utm_campaign');

        // Build a session hash: IP + user-agent + date → unique visitor per day
        $sessionHash = hash('sha256', $request->ip() . '|' . $request->userAgent() . '|' . today()->toDateString());

        PageVisit::create([
            'path'            => '/' . ltrim($request->path(), '/'),
            'referrer_url'    => $referrer ? mb_substr($referrer, 0, 1000) : null,
            'referrer_domain' => $referrerDomain ? mb_substr($referrerDomain, 0, 255) : null,
            'source_type'     => PageVisit::classifySource($referrerDomain, $utmMedium),
            'utm_source'      => $utmSource ? mb_substr($utmSource, 0, 100) : null,
            'utm_medium'      => $utmMedium ? mb_substr($utmMedium, 0, 100) : null,
            'utm_campaign'    => $utmCampaign ? mb_substr($utmCampaign, 0, 150) : null,
            'utm_content'     => $request->query('utm_content') ? mb_substr($request->query('utm_content'), 0, 150) : null,
            'utm_term'        => $request->query('utm_term') ? mb_substr($request->query('utm_term'), 0, 150) : null,
            'country'         => $this->detectCountry($request),
            'device'          => $this->detectDevice($request),
            'browser'         => $this->detectBrowser($request),
            'os'              => $this->detectOS($request),
            'session_hash'    => $sessionHash,
            'created_at'      => now(),
        ]);
    }

    // ─── Detection helpers (no external packages) ────────

    protected function detectDevice(Request $request): string
    {
        $ua = strtolower($request->userAgent() ?? '');

        if (preg_match('/tablet|ipad|playbook|silk/', $ua)) return 'tablet';
        if (preg_match('/mobile|android|iphone|ipod|opera mini|webos/', $ua)) return 'mobile';

        return 'desktop';
    }

    protected function detectBrowser(Request $request): ?string
    {
        $ua = $request->userAgent() ?? '';

        return match (true) {
            str_contains($ua, 'Edg/')    => 'Edge',
            str_contains($ua, 'OPR/')    => 'Opera',
            str_contains($ua, 'Chrome/') => 'Chrome',
            str_contains($ua, 'Safari/') && !str_contains($ua, 'Chrome') => 'Safari',
            str_contains($ua, 'Firefox/') => 'Firefox',
            default => null,
        };
    }

    protected function detectOS(Request $request): ?string
    {
        $ua = $request->userAgent() ?? '';

        return match (true) {
            str_contains($ua, 'Windows')    => 'Windows',
            str_contains($ua, 'Macintosh')  => 'macOS',
            str_contains($ua, 'Linux') && !str_contains($ua, 'Android') => 'Linux',
            str_contains($ua, 'Android')    => 'Android',
            str_contains($ua, 'iPhone') || str_contains($ua, 'iPad') => 'iOS',
            default => null,
        };
    }

    protected function detectCountry(Request $request): ?string
    {
        // Many hosting providers / CDNs provide country via header
        $cfCountry = $request->header('CF-IPCountry');
        if ($cfCountry && $cfCountry !== 'XX') {
            return strtoupper($cfCountry);
        }

        // Fallback: rough estimate from Accept-Language
        $lang = $request->header('Accept-Language');
        if (!$lang) return null;

        // Parse first language tag: "fr-FR,fr;q=0.9" → FR
        if (preg_match('/^([a-z]{2})-([A-Z]{2})/', $lang, $m)) {
            return $m[2]; // FR, US, GB, etc.
        }

        // Fallback language → country mapping
        $firstLang = strtolower(substr($lang, 0, 2));
        return match ($firstLang) {
            'fr' => 'FR',
            'en' => 'US',
            'de' => 'DE',
            'es' => 'ES',
            'it' => 'IT',
            'pt' => 'BR',
            'nl' => 'NL',
            'ja' => 'JP',
            'zh' => 'CN',
            'ko' => 'KR',
            'ar' => 'SA',
            default => null,
        };
    }

    protected function isExcluded(Request $request): bool
    {
        foreach ($this->excludedPaths as $pattern) {
            if ($request->is($pattern)) return true;
        }
        return false;
    }

    protected function isBot(Request $request): bool
    {
        $ua = strtolower($request->userAgent() ?? '');

        foreach ($this->bots as $bot) {
            if (str_contains($ua, $bot)) return true;
        }

        return false;
    }
}
