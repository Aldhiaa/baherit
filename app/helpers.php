<?php

use App\Helpers\SettingsHelper;

if (!function_exists('setting')) {
    /**
     * Get a setting value by key
     */
    function setting(string $key, $default = null)
    {
        return SettingsHelper::get($key, $default);
    }
}

if (!function_exists('site_logo')) {
    /**
     * Get site logo URL
     */
    function site_logo(bool $dark = false): string
    {
        return SettingsHelper::logo($dark);
    }
}

if (!function_exists('site_favicon')) {
    /**
     * Get site favicon URL
     */
    function site_favicon(): string
    {
        return SettingsHelper::favicon();
    }
}

if (!function_exists('social_links')) {
    /**
     * Get social media links with icons
     */
    function social_links(): array
    {
        return SettingsHelper::socialLinksWithIcons();
    }
}
