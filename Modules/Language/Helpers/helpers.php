<?php

use Modules\Language\Models\Language;
use Modules\Language\Models\Translation;

if (! function_exists('translate')) {
    function translate($key, $locale = null)
    {
        if (!$locale) {
            // Use current locale from session or config
            $locale = app()->getLocale();
        }

        // Optionally cache the results for performance
        $language = Language::where('locale', $locale)->first();
        if (!$language) {
            return $key; // fallback
        }

        $translation = Translation::where('language_id', $language->id)
            ->where('translation_key', $key)
            ->first();

        return $translation->value ?? $key;
    }
}
