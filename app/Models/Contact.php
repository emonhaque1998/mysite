<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "why_chosse_me",
        "address",
        "email",
        "number",
        "facebook",
        "twiter",
        "linkdin",
        "instragram"
    ];

    protected $casts = [
        'why_chosse_me' => 'array',
    ];
}
