<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\FaqCategoryTranslation;
use App\Models\Faq;

/**
 * @property-read FaqCategoryTranslation|null $translation
 */
class FaqCategory extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function translationModel(): string
    {
        return FaqCategoryTranslation::class;
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order');
    }
}
