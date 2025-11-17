<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read PageTranslation|null $translation
 */

class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'slug',
        'seo_title',
        'seo_description',
        'status',
    ];

    protected $casts = [
        'seo_description' => 'string',
    ];

    public function translationModel(): string
    {
        return PageTranslation::class;
    }
}
