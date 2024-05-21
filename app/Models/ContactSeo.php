<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactSeo extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "keyword",
        "image"
    ];

    protected $casts = [
        'keyword' => 'array',
    ];
}
