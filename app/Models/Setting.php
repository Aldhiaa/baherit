<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'logo',
    ];

    protected $casts = [
        'value' => 'array', // For JSON values
    ];
}
