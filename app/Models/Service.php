<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category',
        'icon',
        'features',
        'timeline',
    ];

    protected $casts = [
        'title' => 'array',
        'description' => 'array',
        'features' => 'array',
        'timeline' => 'string',
    ];

    public function getFeaturesAttribute($value)
    {
        // Get the features for the current locale
        return $this->getTranslation('features', app()->getLocale());
    }

    public function setFeaturesAttribute($value)
    {
        if (is_array($value) && (isset($value['en']) || isset($value['ar']))) {
            // If we're seeding with multilingual data, store it directly
            $this->attributes['features'] = json_encode($value);
        } else {
            $features = isset($this->attributes['features']) ? json_decode($this->attributes['features'], true) : [];
            $features[app()->getLocale()] = $value;
            $this->attributes['features'] = json_encode($features);
        }
    }

    public function getTitleAttribute($value)
    {
        return $this->getTranslation('title', app()->getLocale());
    }

    public function getDescriptionAttribute($value)
    {
        return $this->getTranslation('description', app()->getLocale());
    }

    public function setTitleAttribute($value)
    {
        if (is_array($value) && (isset($value['en']) || isset($value['ar']))) {
            // If we're seeding with multilingual data, store it directly
            $this->attributes['title'] = json_encode($value);
        } else {
            $titles = isset($this->attributes['title']) ? json_decode($this->attributes['title'], true) : [];
            $titles[app()->getLocale()] = $value;
            $this->attributes['title'] = json_encode($titles);
        }
    }

    public function setDescriptionAttribute($value)
    {
        if (is_array($value) && (isset($value['en']) || isset($value['ar']))) {
            // If we're seeding with multilingual data, store it directly
            $this->attributes['description'] = json_encode($value);
        } else {
            $descriptions = isset($this->attributes['description']) ? json_decode($this->attributes['description'], true) : [];
            $descriptions[app()->getLocale()] = $value;
            $this->attributes['description'] = json_encode($descriptions);
        }
    }

    public function getTranslation($attribute, $locale)
    {
        $translations = json_decode($this->attributes[$attribute] ?? '{}', true);

        if (is_array($translations) && isset($translations[$locale])) {
            return $translations[$locale];
        }

        // Fallback to English if the requested translation doesn't exist
        if (is_array($translations) && isset($translations['en'])) {
            return $translations['en'];
        }

        // Return empty array for features, empty string for other attributes
        if ($attribute === 'features') {
            return [];
        }

        return $this->attributes[$attribute] ?? '';
    }
}
