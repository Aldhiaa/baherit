<?php

namespace Modules\Projects\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Projects\Database\Factories\ProjectFactory;

class Project extends Model
{
    use HasFactory,HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'features',
        'client_name',
        'completion_date',
        'featured_image',
        'gallery',
        'is_featured',
        'is_active',
        'github_url',
        'demo_url',
        'video_url',
        'client_logo',
    ];
    public $translatable = ['title', 'description', 'features', 'client_name'];

    protected $casts = [
        'gallery' => 'array',
        'completion_date' => 'date',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(ProjectCategory::class, 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug) && isset($project->title)) {
                // Generate slug from the default locale value
                $project->slug = Str::slug($project->getTranslation('title', app()->getLocale()));
            }
        });
    }

    // protected static function newFactory(): ProjectFactory
    // {
    //     // return ProjectFactory::new();
    // }
}
