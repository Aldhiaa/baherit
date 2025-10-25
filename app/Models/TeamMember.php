<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TeamMember extends Model
{
    protected $fillable = [
        'name',
        'position',
        'bio',
        'image_url',
        'linkedin_url',
        'twitter_url',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'name' => 'array',
        'position' => 'array',
        'bio' => 'array',
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
     * Get the position in the current locale
     */
    public function getPositionAttribute($value)
    {
        $positions = json_decode($value, true);
        $locale = app()->getLocale();
        return $positions[$locale] ?? $positions['en'] ?? '';
    }

    /**
     * Get the bio in the current locale
     */
    public function getBioAttribute($value)
    {
        $bios = json_decode($value, true);
        $locale = app()->getLocale();
        return $bios[$locale] ?? $bios['en'] ?? '';
    }

    /**
     * Set name attribute with multilingual support
     */
    public function setNameAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['name'] = json_encode($value);
        } else {
            $names = isset($this->attributes['name']) ? json_decode($this->attributes['name'], true) : [];
            $names[app()->getLocale()] = $value;
            $this->attributes['name'] = json_encode($names);
        }
    }

    /**
     * Set position attribute with multilingual support
     */
    public function setPositionAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['position'] = json_encode($value);
        } else {
            $positions = isset($this->attributes['position']) ? json_decode($this->attributes['position'], true) : [];
            $positions[app()->getLocale()] = $value;
            $this->attributes['position'] = json_encode($positions);
        }
    }

    /**
     * Set bio attribute with multilingual support
     */
    public function setBioAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['bio'] = json_encode($value);
        } else {
            $bios = isset($this->attributes['bio']) ? json_decode($this->attributes['bio'], true) : [];
            $bios[app()->getLocale()] = $value;
            $this->attributes['bio'] = json_encode($bios);
        }
    }

    /**
     * Get translation for a specific attribute and locale
     */
    public function getTranslation($attribute, $locale, $useFallback = true)
    {
        $values = json_decode($this->attributes[$attribute], true);
        if (isset($values[$locale])) {
            return $values[$locale];
        }

        if ($useFallback && isset($values['en'])) {
            return $values['en'];
        }

        return '';
    }

    /**
     * Get name in specific locale
     */
    public function getNameInLocale($locale)
    {
        $names = json_decode($this->attributes['name'], true);
        return $names[$locale] ?? $names['en'] ?? '';
    }

    /**
     * Get position in specific locale
     */
    public function getPositionInLocale($locale)
    {
        $positions = json_decode($this->attributes['position'], true);
        return $positions[$locale] ?? $positions['en'] ?? '';
    }

    /**
     * Get bio in specific locale
     */
    public function getBioInLocale($locale)
    {
        $bios = json_decode($this->attributes['bio'], true);
        return $bios[$locale] ?? $bios['en'] ?? '';
    }
}
