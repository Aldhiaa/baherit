<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TestimonialTranslation;

/**
 * @property-read TestimonialTranslation|null $translation
 */
class Testimonial extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'avatar_path',
        'rating',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'rating' => 'integer',
        'is_active' => 'boolean',
    ];

    public function translationModel(): string
    {
        return TestimonialTranslation::class;
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
