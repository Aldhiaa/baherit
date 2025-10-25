<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
        return $value ? json_decode($value, true) : [];
    }

    public function setFeaturesAttribute($value)
    {
        $this->attributes['features'] = json_encode($value);
    }
    
    public function getTitleAttribute($value)
    {
        return $this->getTranslation('title', LaravelLocalization::getCurrentLocale());
    }
    
    public function getDescriptionAttribute($value)
    {
        return $this->getTranslation('description', LaravelLocalization::getCurrentLocale());
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
        
        return $this->attributes[$attribute] ?? '';
    }
}
