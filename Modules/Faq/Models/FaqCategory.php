<?php

namespace Modules\Faq\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Faq\Database\Factories\FaqCategoryFactory;

class FaqCategory extends Model
{
    use HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'slug', 'order'];
    public $translatable = ['name'];

    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            if (empty($category->slug) && isset($category->name)) {

                $category->slug = Str::slug($category->getTranslation('name', app()->getLocale()));
            }
        });


    }

    // protected static function newFactory(): FaqCategoryFactory
    // {
    //     // return FaqCategoryFactory::new();
    // }
}
