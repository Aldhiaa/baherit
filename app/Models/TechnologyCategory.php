<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TechnologyCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'icon_svg_path',
        'color_class',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'name' => 'array',
        'description' => 'array',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
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
     * Set description attribute with multilingual support
     */
    public function setDescriptionAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['description'] = json_encode($value);
        } else {
            $descriptions = isset($this->attributes['description']) ? json_decode($this->attributes['description'], true) : [];
            $descriptions[app()->getLocale()] = $value;
            $this->attributes['description'] = json_encode($descriptions);
        }
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
     * Get description in specific locale
     */
    public function getDescriptionInLocale($locale)
    {
        $descriptions = json_decode($this->attributes['description'], true);
        return $descriptions[$locale] ?? $descriptions['en'] ?? '';
    }

    /**
     * Scope a query to only include active categories
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope a query to order by sort_order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order');
    }
}
