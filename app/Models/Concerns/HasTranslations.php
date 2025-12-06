<?php

namespace App\Models\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasTranslations
{
    /**
     * Get all translations for the model.
     */
    public function translations(): HasMany
    {
        return $this->hasMany($this->translationModel());
    }

    /**
     * Scope a query to eager load translations for the provided locale with optional fallback.
     */
    public function scopeWithTranslations(Builder $query, ?string $locale = null, bool $withFallback = true): Builder
    {
        $locale = $locale ?? app()->getLocale();
        $fallback = $withFallback ? config('app.fallback_locale') : null;

        return $query->with(['translations' => function ($relation) use ($locale, $fallback) {
            $relation->where(function ($query) use ($locale, $fallback) {
                $query->where('locale', $locale);

                if ($fallback && $fallback !== $locale) {
                    $query->orWhere('locale', $fallback);
                }
            });
        }]);
    }

    /**
     * Retrieve a translation record for the given locale.
     */
    public function translate(?string $locale = null, bool $useFallback = true)
    {
        $locale = $locale ?? app()->getLocale();
        $translations = $this->relationLoaded('translations')
            ? $this->translations
            : $this->translations()->get();

        $translation = $translations->firstWhere('locale', $locale);

        if ($translation || ! $useFallback) {
            return $translation;
        }

        $fallback = config('app.fallback_locale');

        if ($fallback && $fallback !== $locale) {
            return $translations->firstWhere('locale', $fallback);
        }

        return null;
    }

    /**
     * Retrieve a translation record for the given locale or create a new instance.
     */
    public function translateOrNew(?string $locale = null)
    {
        $locale = $locale ?? app()->getLocale();

        if (($translation = $this->translate($locale, false))) {
            return $translation;
        }

        return $this->translations()->make(['locale' => $locale]);
    }

    /**
     * Helper to fetch a translated attribute if available.
     */
    public function getTranslatedAttribute(string $attribute, ?string $locale = null, $default = null)
    {
        $translation = $this->translate($locale);

        return $translation?->{$attribute} ?? $default;
    }

    /**
     * Accessor to expose the current locale translation as "translation" attribute.
     */
    public function getTranslationAttribute()
    {
        return $this->translate();
    }

    /**
     * Child models must return their translation model FQN.
     */
    abstract protected function translationModel(): string;
}
