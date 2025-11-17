<?php

namespace App\Models;

use App\Models\Concerns\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CounterTranslation;

/**
 * @property-read CounterTranslation|null $translation
 */
class Counter extends Model
{
    use HasFactory;
    use HasTranslations;

    protected $fillable = [
        'key',
        'icon_path',
        'target_value',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'target_value' => 'integer',
        'is_active' => 'boolean',
    ];

    public function translationModel(): string
    {
        return CounterTranslation::class;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('display_order');
    }
}
