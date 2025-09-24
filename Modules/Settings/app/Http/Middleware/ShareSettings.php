<?php

namespace Modules\Settings\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Modules\Settings\Models\Setting;


class ShareSettings
{
    public function handle(Request $request, Closure $next)
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        view()->share('siteSettings', $settings);
        return $next($request);
    }
}
