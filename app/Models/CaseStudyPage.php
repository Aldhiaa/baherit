<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CaseStudyPage extends Model
{
    protected $fillable = [
        'page_name',
        'hero_title',
        'hero_description',
        'hero_button_primary',
        'hero_button_secondary',
        'search_placeholder',
        'filter_all',
        'filter_healthcare',
        'filter_finance',
        'filter_manufacturing',
        'filter_retail',
        'reset',
        'featured_title',
        'featured_subtitle',
        'completed',
        'view_full_case_study',
        'start_similar_project',
        'grid_title',
        'grid_subtitle',
        'view_case_study',
        'load_more',
        'metrics_title',
        'metrics_subtitle',
        'projects_delivered',
        'client_satisfaction',
        'avg_roi',
        'years_experience',
        'cta_title',
        'cta_description',
        'cta_button_primary',
        'cta_button_secondary',
        'is_active',
    ];

    protected $casts = [
        'hero_title' => 'array',
        'hero_description' => 'array',
        'hero_button_primary' => 'array',
        'hero_button_secondary' => 'array',
        'search_placeholder' => 'array',
        'filter_all' => 'array',
        'filter_healthcare' => 'array',
        'filter_finance' => 'array',
        'filter_manufacturing' => 'array',
        'filter_retail' => 'array',
        'reset' => 'array',
        'featured_title' => 'array',
        'featured_subtitle' => 'array',
        'completed' => 'array',
        'view_full_case_study' => 'array',
        'start_similar_project' => 'array',
        'grid_title' => 'array',
        'grid_subtitle' => 'array',
        'view_case_study' => 'array',
        'load_more' => 'array',
        'metrics_title' => 'array',
        'metrics_subtitle' => 'array',
        'projects_delivered' => 'array',
        'client_satisfaction' => 'array',
        'avg_roi' => 'array',
        'years_experience' => 'array',
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
