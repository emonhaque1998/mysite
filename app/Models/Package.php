<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price",
        "short_description",
        "includes",
        "saving_parcentage"
    ];

    protected $casts = [
        'includes' => 'array',
    ];
}
