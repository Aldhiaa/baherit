<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Technology extends Model
{
    protected $fillable = [
        'name',
        'category',
        'description',
        'logo_url',
        'proficiency_level',
        'tags',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'tags' => 'array',
        'proficiency_level' => 'integer',
        'is_featured' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Get the name in the current locale
     */
    public function getNameAttribute($value)
    {
        $names = json_decode($value, true);
        $locale = app()->getLocale();
        return $names[$locale] ?? $names['en'] ?? '';
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
     * Get a specific translation
     */
    public function getTranslation($attribute, $locale, $fallback = true)
    {
        $values = json_decode($this->attributes[$attribute] ?? '{}', true);
        
        if (isset($values[$locale])) {
            return $values[$locale];
        }
        
        if ($fallback) {
            return $values['en'] ?? '';
        }
        
        return '';
    }

    public function getTagsAttribute($value)
    {
        return $value ? json_decode($value, true) : [];
    }

    public function setTagsAttribute($value)
    {
        $this->attributes['tags'] = json_encode($value);
    }
}
