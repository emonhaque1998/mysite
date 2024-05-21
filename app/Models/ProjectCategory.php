<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "category_name",
        "slug"
    ];

    public function project(){
        return $this->hasMany(Project::class);
    }
}
