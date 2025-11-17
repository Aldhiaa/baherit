<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BannerTranslation;

/**
 * @property-read BannerTranslation|null $translation
 */
class Banner extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'page_context',
        'image_path',
        'button_url',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function translationModel(): string
    {
        return BannerTranslation::class;
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
