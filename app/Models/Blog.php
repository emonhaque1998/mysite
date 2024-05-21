<?php

namespace App\Models;

use App\Models\User;
use App\Models\Comment;
use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "banner",
        "description",
        "qutation_title",
        "images",
        "slug",
        "last_title",
        "last_description",
        "blog_category_id",
        "title",
        "meta_title",
        "meta_description",
        "meta_keyword",
        "meta_image"
    ];

    protected $casts = [
        'images' => 'array',
        'meta_keyword' => 'array',
    ];

    public function blogCategory(){
        return $this->belongsTo(BlogCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
