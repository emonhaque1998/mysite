<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "service",
        "number",
        "email",
        "experience",
        "author",
        "author_image",
        "avater"
    ];

    protected $casts = [
        'service' => 'array'
    ];
}
