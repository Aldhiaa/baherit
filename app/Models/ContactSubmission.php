<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'service_interest',
        'message',
        'submission_type',
    ];

    protected $casts = [
        //
    ];
}
