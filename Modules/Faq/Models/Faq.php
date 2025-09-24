<?php

namespace Modules\Faq\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Faq\Database\Factories\FaqFactory;

class Faq extends Model
{
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'faq_category_id',
        'question',
        'answer',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    public $translatable = ['question', 'answer'];
    protected static function boot()
    {
        parent::boot();

        // Automatically set the slug when creating a new FAQ
        static::creating(function ($faq) {
            if (empty($faq->slug) && isset($faq->question)) {
                // Generate slug from the default locale value
                $faq->slug = Str::slug($faq->getTranslation('question', app()->getLocale()));
            }
        });
    }

    public function category()
    {
        return $this->belongsTo(FaqCategory::class, 'faq_category_id');
    }
    // protected static function newFactory(): FaqFactory
    // {
    //     // return FaqFactory::new();
    // }
}
