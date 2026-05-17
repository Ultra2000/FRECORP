<?php

namespace App\Http\Controllers;

use App\Models\PageVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnalyticsController extends Controller
{
    /**
     * Show login form for analytics dashboard.
     */
    public function login()
    {
        if (session('analytics_authenticated')) {
            return redirect()->route('analytics.dashboard');
        }

        return view('analytics.login');
    }

    /**
     * Authenticate with env password.
     */
    public function authenticate(Request $request)
    {
        $request->validate(['password' => 'required']);

        $password = config('app.analytics_password', env('ANALYTICS_PASSWORD', 'frecorp2026'));

        if ($request->password === $password) {
            $request->session()->put('analytics_authenticated', true);
            return redirect()->route('analytics.dashboard');
        }

        return back()->withErrors(['password' => 'Mot de passe incorrect.']);
    }

    /**
     * Logout from analytics.
     */
    public function logout(Request $request)
    {
        $request->session()->forget('analytics_authenticated');
        return redirect()->route('analytics.login');
    }

    /**
     * Main analytics dashboard.
     */
    public function dashboard(Request $request)
    {
        $days = (int) $request->query('days', 30);
        $days = in_array($days, [7, 14, 30, 90]) ? $days : 30;

        $query = PageVisit::period($days);

        // ─── KPIs ────────────────────────────────────────
        $totalViews   = (clone $query)->count();
        $uniqueVisitors = (clone $query)->distinct('session_hash')->count('session_hash');
        $totalConversions = (clone $query)->conversions()->count();
        $conversionRate = $uniqueVisitors > 0
            ? round(($totalConversions / $uniqueVisitors) * 100, 1)
            : 0;

        // ─── Traffic by day (chart) ──────────────────────
        $trafficByDay = PageVisit::period($days)
            ->select(DB::raw("DATE(created_at) as date"), DB::raw("COUNT(*) as views"), DB::raw("COUNT(DISTINCT session_hash) as visitors"))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // ─── Top sources ─────────────────────────────────
        $topSources = PageVisit::period($days)
            ->select('source_type', DB::raw('COUNT(*) as views'), DB::raw('COUNT(DISTINCT session_hash) as visitors'))
            ->groupBy('source_type')
            ->orderByDesc('views')
            ->get()
            ->map(function ($item) {
                $item->label = match ($item->source_type) {
                    'organic'  => '🔍 Recherche organique',
                    'direct'   => '🔗 Direct',
                    'social'   => '📱 Réseaux sociaux',
                    'referral' => '🌐 Referral',
                    'paid'     => '💰 Publicité payante',
                    'email'    => '📧 Email / Newsletter',
                    default    => $item->source_type,
                };
                return $item;
            });

        // ─── Top referrer domains ────────────────────────
        $topReferrers = PageVisit::period($days)
            ->whereNotNull('referrer_domain')
            ->select('referrer_domain', DB::raw('COUNT(*) as views'), DB::raw('COUNT(DISTINCT session_hash) as visitors'))
            ->groupBy('referrer_domain')
            ->orderByDesc('views')
            ->limit(10)
            ->get()
            ->map(function ($item) {
                $item->label = PageVisit::getSourceLabel($item->referrer_domain);
                return $item;
            });

        // ─── Top pages ───────────────────────────────────
        $topPages = PageVisit::period($days)
            ->select('path', DB::raw('COUNT(*) as views'), DB::raw('COUNT(DISTINCT session_hash) as visitors'))
            ->groupBy('path')
            ->orderByDesc('views')
            ->limit(10)
            ->get()
            ->map(function ($item) {
                $item->label = match (true) {
                    $item->path === '/'           => 'Accueil',
                    str_starts_with($item->path, '/blog/') => 'Blog : ' . str_replace('/blog/', '', $item->path),
                    $item->path === '/blog'       => 'Blog (index)',
                    $item->path === '/demo'       => 'Page Démo',
                    $item->path === '/roadmap'    => 'Roadmap',
                    default => $item->path,
                };
                return $item;
            });

        // ─── UTM Campaigns ───────────────────────────────
        $utmCampaigns = PageVisit::period($days)
            ->whereNotNull('utm_campaign')
            ->select(
                'utm_source',
                'utm_medium',
                'utm_campaign',
                DB::raw('COUNT(*) as views'),
                DB::raw('COUNT(DISTINCT session_hash) as visitors'),
                DB::raw('SUM(is_conversion) as conversions')
            )
            ->groupBy('utm_source', 'utm_medium', 'utm_campaign')
            ->orderByDesc('views')
            ->limit(15)
            ->get();

        // ─── Countries ───────────────────────────────────
        $countries = PageVisit::period($days)
            ->whereNotNull('country')
            ->select('country', DB::raw('COUNT(*) as views'), DB::raw('COUNT(DISTINCT session_hash) as visitors'))
            ->groupBy('country')
            ->orderByDesc('visitors')
            ->limit(10)
            ->get()
            ->map(function ($item) {
                $item->flag = self::countryFlag($item->country);
                $item->name = self::countryName($item->country);
                return $item;
            });

        // ─── Devices ─────────────────────────────────────
        $devices = PageVisit::period($days)
            ->select('device', DB::raw('COUNT(*) as views'), DB::raw('COUNT(DISTINCT session_hash) as visitors'))
            ->groupBy('device')
            ->orderByDesc('views')
            ->get()
            ->map(function ($item) {
                $item->label = match ($item->device) {
                    'desktop' => '💻 Desktop',
                    'mobile'  => '📱 Mobile',
                    'tablet'  => '📋 Tablette',
                    default   => $item->device,
                };
                return $item;
            });

        // ─── Browsers ────────────────────────────────────
        $browsers = PageVisit::period($days)
            ->whereNotNull('browser')
            ->select('browser', DB::raw('COUNT(*) as views'))
            ->groupBy('browser')
            ->orderByDesc('views')
            ->limit(5)
            ->get();

        // ─── Conversions by type ─────────────────────────
        $conversionsByType = PageVisit::period($days)
            ->conversions()
            ->select('conversion_type', DB::raw('COUNT(*) as total'))
            ->groupBy('conversion_type')
            ->orderByDesc('total')
            ->get();

        // ─── Conversions by day (chart) ──────────────────
        $conversionsByDay = PageVisit::period($days)
            ->conversions()
            ->select(DB::raw("DATE(created_at) as date"), DB::raw("COUNT(*) as total"))
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return view('analytics.dashboard', compact(
            'days',
            'totalViews',
            'uniqueVisitors',
            'totalConversions',
            'conversionRate',
            'trafficByDay',
            'topSources',
            'topReferrers',
            'topPages',
            'utmCampaigns',
            'countries',
            'devices',
            'browsers',
            'conversionsByType',
            'conversionsByDay',
        ));
    }

    // ─── Track conversion via AJAX ───────────────────────

    public function trackConversion(Request $request)
    {
        $request->validate([
            'type' => 'required|string|in:trial,demo,newsletter',
            'page' => 'required|string|max:500',
        ]);

        $sessionHash = hash('sha256', $request->ip() . '|' . $request->userAgent() . '|' . today()->toDateString());

        PageVisit::create([
            'path'            => $request->page,
            'source_type'     => 'direct',
            'session_hash'    => $sessionHash,
            'device'          => 'desktop',
            'is_conversion'   => true,
            'conversion_type' => $request->type,
            'created_at'      => now(),
        ]);

        return response()->json(['ok' => true]);
    }

    // ─── Helpers ─────────────────────────────────────────

    private static function countryFlag(string $code): string
    {
        $code = strtoupper($code);
        if (strlen($code) !== 2) return '🌍';

        $flag = '';
        foreach (str_split($code) as $char) {
            $flag .= mb_chr(0x1F1E6 + ord($char) - ord('A'));
        }
        return $flag;
    }

    private static function countryName(string $code): string
    {
        return match (strtoupper($code)) {
            'FR' => 'France',
            'US' => 'États-Unis',
            'GB' => 'Royaume-Uni',
            'DE' => 'Allemagne',
            'ES' => 'Espagne',
            'IT' => 'Italie',
            'CA' => 'Canada',
            'BE' => 'Belgique',
            'CH' => 'Suisse',
            'NL' => 'Pays-Bas',
            'PT' => 'Portugal',
            'BR' => 'Brésil',
            'MA' => 'Maroc',
            'TN' => 'Tunisie',
            'DZ' => 'Algérie',
            'SN' => 'Sénégal',
            'CI' => 'Côte d\'Ivoire',
            'CM' => 'Cameroun',
            'JP' => 'Japon',
            'CN' => 'Chine',
            'KR' => 'Corée du Sud',
            'IN' => 'Inde',
            'SA' => 'Arabie Saoudite',
            default => $code,
        };
    }
}
