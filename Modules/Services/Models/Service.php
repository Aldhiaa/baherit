<?php

namespace Modules\Services\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Services\Database\Factories\ServiceFactory;

class Service extends Model
{
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'icon',
        'image',
        'order',
        'is_featured',
        'is_active',
    ];
    public $translatable = ['title', 'description', 'short_description'];
    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();



        static::creating(function ($service) {
            if (empty($service->slug) && isset($service->title)) {
                // Generate slug from the default locale value
                $service->slug = Str::slug($service->getTranslation('title', app()->getLocale()));
            }
        });
    }

    // protected static function newFactory(): ServiceFactory
    // {
    //     // return ServiceFactory::new();
    // }
}
