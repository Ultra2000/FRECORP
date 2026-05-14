<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    protected array $supported = ['fr', 'en'];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = null;

        // 1. Session (manual choice)
        if ($request->session()->has('locale')) {
            $locale = $request->session()->get('locale');
        }

        // 2. Cookie
        if (!$locale && $request->cookie('locale')) {
            $locale = $request->cookie('locale');
        }

        // 3. Browser Accept-Language
        if (!$locale) {
            $locale = $this->detectFromBrowser($request);
        }

        // 4. Fallback
        if (!$locale || !in_array($locale, $this->supported)) {
            $locale = config('app.locale', 'fr');
        }

        App::setLocale($locale);
        $request->session()->put('locale', $locale);

        $response = $next($request);

        if (method_exists($response, 'withCookie')) {
            $response->withCookie(cookie('locale', $locale, 60 * 24 * 365));
        }

        return $response;
    }

    protected function detectFromBrowser(Request $request): ?string
    {
        $acceptLanguage = $request->header('Accept-Language');
        if (!$acceptLanguage) return null;

        $languages = [];
        foreach (explode(',', $acceptLanguage) as $part) {
            $part = trim($part);
            if (str_contains($part, ';q=')) {
                [$lang, $q] = explode(';q=', $part);
                $quality = (float) $q;
            } else {
                $lang = $part;
                $quality = 1.0;
            }
            $lang = strtolower(substr($lang, 0, 2));
            if (in_array($lang, $this->supported)) {
                $languages[$lang] = $quality;
            }
        }

        if (empty($languages)) return null;
        arsort($languages);
        return array_key_first($languages);
    }
}
