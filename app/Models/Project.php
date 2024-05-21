<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "sub_title",
        "description",
        "include",
        "banner",
        "images",
        "summary",
        "clinet_name",
        "location",
        "publish_date",
        "project_category_id",
        "small_banner",
        "slug",
        "meta_title",
        "meta_description",
        "meta_keyword",
        "meta_image",
        "project_url"
    ];

    protected $casts = [
        'images' => 'array',
        "include" => "array",
        "meta_keyword" => "array"
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            $project->slug = Str::slug($project->title);
        });

        static::updating(function ($project) {
            $project->slug = Str::slug($project->title);
        });
    }

    public function projectCategory(){
        return $this->belongsTo(ProjectCategory::class);
    }
}
