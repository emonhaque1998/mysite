<?php

use App\Http\Controllers\FileController;
use App\Livewire\About;
use App\Livewire\BlogDetails;
use App\Livewire\Blogs;
use App\Livewire\CategoryBlogs;
use App\Livewire\CategoryProject;
use App\Livewire\Contact;
use App\Livewire\Home;
use App\Livewire\Project;
use App\Livewire\ProjectDetails;
use App\Livewire\Service;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Project as ModelsProject;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get("/", Home::class)->name("home");
Route::get("/about", About::class)->name("about");
Route::get("/service", Service::class)->name("service");
Route::get("/project", Project::class)->name("project");
Route::get("/project-details/{slug}", ProjectDetails::class);
Route::get("/project/category/{slug}", CategoryProject::class);
Route::get("/blogs", Blogs::class)->name("blogs");
Route::get("/blogs/category/{slug}", CategoryBlogs::class);
Route::get("/blog/{slug}", BlogDetails::class);
Route::get("/contact", Contact::class)->name("contact");

Route::get('/download/upload/{file}', [FileController::class, "download"]);


Route::get("/sitemap", function(){
    $sitemap = Sitemap::create()
        ->add(Url::create("/"))
        ->add(Url::create("/about"))
        ->add(Url::create("/service"))
        ->add(Url::create("/project"))
        ->add(Url::create("/blogs"))
        ->add(Url::create("/contact"));

    Blog::all()->each(function(Blog $blog) use ($sitemap){
        $sitemap->add(Url::create("/blog/{$blog->slug}"));
    });

    BlogCategory::all()->each(function(BlogCategory $categoryBlog) use ($sitemap){
        $sitemap->add(Url::create("/blogs/category/{$categoryBlog->slug}"));
    });

    ModelsProject::all()->each(function(ModelsProject $project) use ($sitemap){
        $sitemap->add(Url::create("/project-details/{$project->slug}"));
    });

    ProjectCategory::all()->each(function(ProjectCategory $categoryProject) use ($sitemap){
        $sitemap->add(Url::create("/project/category/{$categoryProject->slug}"));
    });

    $sitemap->writeToFile(public_path("sitemap.xml"));

    return "Sitemap Genarate Successfull";
});
