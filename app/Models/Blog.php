<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use App\Models\BlogTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'slug',
        'featured_image',
        'author_name',
        'read_time_minutes',
        'published_at',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public const STATUS_DRAFT = 'draft';
    public const STATUS_SCHEDULED = 'scheduled';
    public const STATUS_PUBLISHED = 'published';

    public function translationModel(): string
    {
        return BlogTranslation::class;
    }

    public function translations(): HasMany
    {
        return parent::translations();
    }

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED)
            ->where(function ($q) {
                $q->whereNull('published_at')
                  ->orWhere('published_at', '<=', now());
            });
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getReadTime(): int
    {
        return $this->read_time_minutes ?? 3;
    }
}
