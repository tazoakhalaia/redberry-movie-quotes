<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LanguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->input('lang', session('locale', App::getLocale()));

        if (!in_array($locale, ['en', 'ka'])) {
            $locale = 'en';
        }

        App::setLocale($locale);
        session(['locale' => $locale]);
        return $next($request);
    }
}
