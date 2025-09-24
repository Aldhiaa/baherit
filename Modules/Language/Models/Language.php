<?php

namespace Modules\Language\Models;

use Illuminate\Database\Eloquent\Model;
use Modules\Language\Models\Translation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Language\Database\Factories\LanguageFactory;

class Language extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'locale',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

    // protected static function newFactory(): LanguageFactory
    // {
    //     // return LanguageFactory::new();
    // }
}
