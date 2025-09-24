<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Modules\Settings\Models\Setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $locale   = app()->getLocale();
        $fallback = config('app.fallback_locale');

        /** @var \Illuminate\Support\Collection $all */
        $all = Setting::all()->keyBy('key');

        $siteSettings = $all->mapWithKeys(function ($setting) use ($locale, $fallback) {
            // If the 'value' field is translatable JSON, return the proper locale;
            // if it's a plain string (e.g. legacy row), just return it.
            $value = $setting->isTranslatableAttribute('value')
                ? $setting->getTranslation('value', $locale)     ?: $setting->getTranslation('value', $fallback)  : $setting->value;

            return [$setting->key => $value];
        })->toArray();

        // Attach logo separately (non‑JSON upload)
        $siteSettings['logo'] = optional($all->get('site_logo'))->logo;

        View::share('siteSettings', $siteSettings);

        Schema::defaultStringLength(191);
    }

}
