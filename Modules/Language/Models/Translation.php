<?php

namespace Modules\Language\Models;

use Modules\Language\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Language\Database\Factories\TranslationFactory;

class Translation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'language_id',
        'translation_key',
        'value',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }


    // protected static function newFactory(): TranslationFactory
    // {
    //     // return TranslationFactory::new();
    // }
}
