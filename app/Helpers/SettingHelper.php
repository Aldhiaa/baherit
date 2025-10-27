<?php

namespace App\Helpers;

use App\Models\Setting;

class SettingHelper
{
    /**
     * Get a setting value by key
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        $setting = Setting::where('key', $key)->first();
        
        if (!$setting) {
            return $default;
        }
        
        // If the setting has a logo, return the logo path
        if ($setting->logo) {
            return $setting->logo;
        }
        
        // If the setting has a value, return it
        if ($setting->value) {
            return $setting->value;
        }
        
        return $default;
    }
    
    /**
     * Get a translated setting value by key and locale
     *
     * @param string $key
     * @param string $locale
     * @param mixed $default
     * @return mixed
     */
    public static function getTranslated($key, $locale = null, $default = null)
    {
        if (!$locale) {
            $locale = app()->getLocale();
        }
        
        $setting = Setting::where('key', $key)->first();
        
        if (!$setting || !$setting->value) {
            return $default;
        }
        
        $value = $setting->value;
        
        if (is_array($value) && isset($value[$locale])) {
            return $value[$locale];
        }
        
        return $default;
    }
}