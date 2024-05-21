<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        "top_title",
        "title",
        "description",
        "download_cv_attachment",
        "hero_image",
        "experience",
        "project_complete",
        "satisfactions"
    ];
}
