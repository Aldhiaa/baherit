<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestimonialTranslation extends Model
{
    use HasFactory;

    protected $fillable = [
        'testimonial_id',
        'locale',
        'author_name',
        'author_title',
        'quote',
    ];
}
