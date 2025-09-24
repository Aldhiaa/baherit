<?php

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory ,HasTranslations;

    protected $fillable = ['key', 'value', 'logo'];
    /**
     * Keep `value` as a string for text settings,
     * but Filament will only hydrate/dehydrate the appropriate field
     * so no need to cast this to array.
     */
    public $translatable = ['value'];
}
