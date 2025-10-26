<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServicePage extends Model
{
    protected $fillable = [
        'page_name',
        'hero_title',
        'hero_highlight',
        'hero_description',
        'hero_button_primary',
        'hero_button_secondary',
        'find_title',
        'find_description',
        'filter_all',
        'filter_development',
        'filter_cloud',
        'filter_consulting',
        'reset',
        'technology_title',
        'technology_description',
        'frontend',
        'backend',
        'database',
        'cloud',
        'learn_more',
        'process_title',
        'process_description',
        'process_discovery',
        'process_discovery_desc',
        'process_design',
        'process_design_desc',
        'process_development',
        'process_development_desc',
        'process_deployment',
        'process_deployment_desc',
        'cta_title',
        'cta_description',
        'cta_button_primary',
        'cta_button_secondary',
        'is_active',
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_highlight' => 'array',
        'hero_description' => 'array',
        'hero_button_primary' => 'array',
        'hero_button_secondary' => 'array',
        'find_title' => 'array',
        'find_description' => 'array',
        'filter_all' => 'array',
        'filter_development' => 'array',
        'filter_cloud' => 'array',
        'filter_consulting' => 'array',
        'reset' => 'array',
        'technology_title' => 'array',
        'technology_description' => 'array',
        'frontend' => 'array',
        'backend' => 'array',
        'database' => 'array',
        'cloud' => 'array',
        'learn_more' => 'array',
        'process_title' => 'array',
        'process_description' => 'array',
        'process_discovery' => 'array',
        'process_discovery_desc' => 'array',
        'process_design' => 'array',
        'process_design_desc' => 'array',
        'process_development' => 'array',
        'process_development_desc' => 'array',
        'process_deployment' => 'array',
        'process_deployment_desc' => 'array',
        'cta_title' => 'array',
        'cta_description' => 'array',
        'cta_button_primary' => 'array',
        'cta_button_secondary' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get a specific translation with fallback
     */
    public function getTranslation($field, $locale)
    {
        $translations = json_decode($this->attributes[$field] ?? '{}', true) ?: [];

        if (isset($translations[$locale])) {
            return $translations[$locale];
        }

        // Fallback to English
        if (isset($translations['en'])) {
            return $translations['en'];
        }

        // Return the original value if no translation is found
        return $this->attributes[$field] ?? '';
    }
}
