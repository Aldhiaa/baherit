<?php

namespace Modules\Blogs\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
    'user_id', 'title', 'slug', 'excerpt', 'content', 'published', 'published_at', 'featured_image'
    ];

    protected $casts = [
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function reactions()
    {
        return $this->morphMany(Reaction::class, 'reactable');
    }

    public function getFeaturedImageUrlAttribute()
    {
        if (! $this->featured_image) {
            return null;
        }
        return Storage::url($this->featured_image);
    }
}
