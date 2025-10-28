<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class CaseStudy extends Model
{
    protected $fillable = [
        'title',
        'industry',
        'description',
        'challenge',
        'solution',
        'results',
        'metrics',
        'image_url',
        'is_featured',
        'completed_at',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'challenge' => 'array',
        'solution' => 'array',
        'results' => 'array',
        'metrics' => 'array',
        'is_featured' => 'boolean',
        'completed_at' => 'date',
    ];

    /**
     * Get the title in the current locale
     */
    public function getTitleAttribute($value)
    {
        $titles = json_decode($value, true);
        $locale = app()->getLocale();
        return $titles[$locale] ?? $titles['en'] ?? '';
    }

    /**
     * Get the description in the current locale
     */
    public function getDescriptionAttribute($value)
    {
        $descriptions = json_decode($value, true);
        $locale = app()->getLocale();
        return $descriptions[$locale] ?? $descriptions['en'] ?? '';
    }

    /**
     * Get the challenge in the current locale
     */
    public function getChallengeAttribute($value)
    {
        $challenges = json_decode($value, true);
        $locale = app()->getLocale();
        return $challenges[$locale] ?? $challenges['en'] ?? '';
    }

    /**
     * Get the solution in the current locale
     */
    public function getSolutionAttribute($value)
    {
        $solutions = json_decode($value, true);
        $locale = app()->getLocale();
        return $solutions[$locale] ?? $solutions['en'] ?? '';
    }

    /**
     * Get the results in the current locale
     */
    public function getResultsAttribute($value)
    {
        $results = json_decode($value, true);
        $locale = app()->getLocale();
        return $results[$locale] ?? $results['en'] ?? '';
    }

    /**
     * Get metrics in the current locale
     */
    public function getMetricsAttribute($value)
    {
        $metrics = $value ? json_decode($value, true) : [];
        $locale = app()->getLocale();

        // Handle multilingual labels in metrics
        foreach ($metrics as &$metric) {
            if (isset($metric['label']) && is_array($metric['label'])) {
                $metric['label'] = $metric['label'][$locale] ?? $metric['label']['en'] ?? '';
            }
        }

        return $metrics;
    }

    /**
     * Set title attribute with multilingual support
     */
    public function setTitleAttribute($value)
    {
        if (is_array($value)) {
            // If we're seeding with multilingual data, store it directly
            if (isset($value['en']) || isset($value['ar'])) {
                $this->attributes['title'] = json_encode($value);
            } else {
                // If it's an array but not multilingual, handle as before
                $titles = isset($this->attributes['title']) ? json_decode($this->attributes['title'], true) : [];
                $titles[app()->getLocale()] = $value;
                $this->attributes['title'] = json_encode($titles);
            }
        } else {
            $titles = isset($this->attributes['title']) ? json_decode($this->attributes['title'], true) : [];
            $titles[app()->getLocale()] = $value;
            $this->attributes['title'] = json_encode($titles);
        }
    }

    /**
     * Set description attribute with multilingual support
     */
    public function setDescriptionAttribute($value)
    {
        if (is_array($value)) {
            // If we're seeding with multilingual data, store it directly
            if (isset($value['en']) || isset($value['ar'])) {
                $this->attributes['description'] = json_encode($value);
            } else {
                // If it's an array but not multilingual, handle as before
                $descriptions = isset($this->attributes['description']) ? json_decode($this->attributes['description'], true) : [];
                $descriptions[app()->getLocale()] = $value;
                $this->attributes['description'] = json_encode($descriptions);
            }
        } else {
            $descriptions = isset($this->attributes['description']) ? json_decode($this->attributes['description'], true) : [];
            $descriptions[app()->getLocale()] = $value;
            $this->attributes['description'] = json_encode($descriptions);
        }
    }

    /**
     * Set challenge attribute with multilingual support
     */
    public function setChallengeAttribute($value)
    {
        if (is_array($value)) {
            // If we're seeding with multilingual data, store it directly
            if (isset($value['en']) || isset($value['ar'])) {
                $this->attributes['challenge'] = json_encode($value);
            } else {
                // If it's an array but not multilingual, handle as before
                $challenges = isset($this->attributes['challenge']) ? json_decode($this->attributes['challenge'], true) : [];
                $challenges[app()->getLocale()] = $value;
                $this->attributes['challenge'] = json_encode($challenges);
            }
        } else {
            $challenges = isset($this->attributes['challenge']) ? json_decode($this->attributes['challenge'], true) : [];
            $challenges[app()->getLocale()] = $value;
            $this->attributes['challenge'] = json_encode($challenges);
        }
    }

    /**
     * Set solution attribute with multilingual support
     */
    public function setSolutionAttribute($value)
    {
        if (is_array($value)) {
            // If we're seeding with multilingual data, store it directly
            if (isset($value['en']) || isset($value['ar'])) {
                $this->attributes['solution'] = json_encode($value);
            } else {
                // If it's an array but not multilingual, handle as before
                $solutions = isset($this->attributes['solution']) ? json_decode($this->attributes['solution'], true) : [];
                $solutions[app()->getLocale()] = $value;
                $this->attributes['solution'] = json_encode($solutions);
            }
        } else {
            $solutions = isset($this->attributes['solution']) ? json_decode($this->attributes['solution'], true) : [];
            $solutions[app()->getLocale()] = $value;
            $this->attributes['solution'] = json_encode($solutions);
        }
    }

    /**
     * Set results attribute with multilingual support
     */
    public function setResultsAttribute($value)
    {
        if (is_array($value)) {
            // If we're seeding with multilingual data, store it directly
            if (isset($value['en']) || isset($value['ar'])) {
                $this->attributes['results'] = json_encode($value);
            } else {
                // If it's an array but not multilingual, handle as before
                $results = isset($this->attributes['results']) ? json_decode($this->attributes['results'], true) : [];
                $results[app()->getLocale()] = $value;
                $this->attributes['results'] = json_encode($results);
            }
        } else {
            $results = isset($this->attributes['results']) ? json_decode($this->attributes['results'], true) : [];
            $results[app()->getLocale()] = $value;
            $this->attributes['results'] = json_encode($results);
        }
    }

    /**
     * Set metrics attribute
     */
    public function setMetricsAttribute($value)
    {
        $this->attributes['metrics'] = json_encode($value);
    }

    /**
     * Get title in specific locale
     */
    public function getTitleInLocale($locale)
    {
        $titles = json_decode($this->attributes['title'], true);
        return $titles[$locale] ?? $titles['en'] ?? '';
    }

    /**
     * Get description in specific locale
     */
    public function getDescriptionInLocale($locale)
    {
        $descriptions = json_decode($this->attributes['description'], true);
        return $descriptions[$locale] ?? $descriptions['en'] ?? '';
    }
}
