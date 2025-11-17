<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeamMemberTranslation;

/**
 * @property-read TeamMemberTranslation|null $translation
 */
class TeamMember extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'photo_path',
        'social_links',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'social_links' => 'array',
        'is_active' => 'boolean',
    ];

    public function translationModel(): string
    {
        return TeamMemberTranslation::class;
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
