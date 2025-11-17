<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\ProjectTranslation;
use App\Models\Service;

/**
 * @property-read ProjectTranslation|null $translation
 */

class Project extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'slug',
        'featured_image',
        'gallery',
        'client',
        'completion_date',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'gallery' => 'array',
        'completion_date' => 'date',
        'is_featured' => 'boolean',
    ];

    public function translationModel(): string
    {
        return ProjectTranslation::class;
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class)->withTimestamps();
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }
}
