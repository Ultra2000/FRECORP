<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AnalyticsAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->session()->get('analytics_authenticated')) {
            return redirect()->route('analytics.login');
        }

        return $next($request);
    }
}
