<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkingProcessTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'working_process_id',
        'locale',
        'title',
        'description',
    ];

    public function workingProcess(): BelongsTo
    {
        return $this->belongsTo(WorkingProcess::class);
    }
}
