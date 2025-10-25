<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AboutSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_name',
        'title',
        'description',
        'content',
        'image',
        'sort_order',
        'is_active'
    ];

    protected $casts = [
        'content' => 'array',
        'is_active' => 'boolean',
    ];

    /**
     * Get the translated title based on the current locale
     */
    public function getTitleAttribute($value)
    {
        if (is_string($value) && !is_array(json_decode($value, true))) {
            return $value;
        }

        return $this->getTranslation('title', app()->getLocale());
    }

    /**
     * Get the translated description based on the current locale
     */
    public function getDescriptionAttribute($value)
    {
        if (is_string($value) && !is_array(json_decode($value, true))) {
            return $value;
        }

        return $this->getTranslation('description', app()->getLocale());
    }

    /**
     * Get a specific translation with fallback
     */
    public function getTranslation($field, $locale, $useFallback = true)
    {
        $translations = json_decode($this->attributes[$field] ?? '{}', true) ?: [];

        if (isset($translations[$locale])) {
            return $translations[$locale];
        }

        // Fallback to English
        if ($useFallback && isset($translations['en'])) {
            return $translations['en'];
        }

        // Return the original value if no translation is found
        return $this->attributes[$field] ?? '';
    }
}
