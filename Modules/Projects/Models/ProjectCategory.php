<?php

namespace Modules\Projects\Models;

use Illuminate\Support\Str;
use Modules\Projects\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Projects\Database\Factories\ProjectCategoryFactory;

class ProjectCategory extends Model
{
    use HasFactory,  HasTranslations;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['name', 'slug'];
    public $translatable = ['name'];

    public function projects()
    {
        return $this->hasMany(Project::class,'category_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->getTranslation('name', app()->getLocale()));
            }
        });


    }

    // protected static function newFactory(): ProjectCategoryFactory
    // {
    //     // return ProjectCategoryFactory::new();
    // }
}
