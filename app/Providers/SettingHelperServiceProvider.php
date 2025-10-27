<?php

namespace App\Providers;

use App\Helpers\SettingHelper;
use Illuminate\Support\ServiceProvider;

class SettingHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('setting.helper', function ($app) {
            return new SettingHelper();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
