<?php

namespace Modules\About\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\About\Database\Factories\AboutFactory;

class About extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'description'];
    protected $fillable = [
        'title',
        'description',
        'icon',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    protected static function boot()
    {
        parent::boot();

        // Automatically set the slug when creating a new About
        
    }

    // protected static function newFactory(): AboutFactory
    // {
    //     // return AboutFactory::new();
    // }
}
