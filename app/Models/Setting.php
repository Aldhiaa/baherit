<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SettingTranslation;

/**
 * @property-read SettingTranslation|null $translation
 */
class Setting extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'key',
        'type',
        'group',
        'is_translatable',
        'value',
    ];

    protected $casts = [
        'is_translatable' => 'boolean',
    ];

    public function translationModel(): string
    {
        return SettingTranslation::class;
    }
}
