<?php

namespace Modules\Language\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->segment(1);              // e.g. /ar/...
        if (! in_array($locale, ['en', 'ar'])) {
            $locale = session('locale', config('app.locale'));
        } else {
            session(['locale' => $locale]);
        }

        app()->setLocale($locale);                   // 2) set it

        return $next($request);
    }
}
