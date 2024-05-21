<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GlobalClientTitle extends Model
{
    use HasFactory;

    protected $fillable = [
        "title"
    ];
}
