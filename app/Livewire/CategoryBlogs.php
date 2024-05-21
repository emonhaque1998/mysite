<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\BlogCategory;
use App\Models\CategoryBlogSeo;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class CategoryBlogs extends Component
{

    public $slug;
    public $blogs;
    public $searchValue;

    public function mount($slug){
        $this->seoMount();
        $this->slug = $slug;
        $category = BlogCategory::with(['blog' => function ($query) {
            $query->take(8);
        }])->where("slug", $slug)->first();
        $this->blogs = $category->blog;
    }

    public function searchBlog(){
        $category = BlogCategory::with(['blog' => function ($query) {
            $query->where("title", 'like', '%'.$this->searchValue.'%')->take(8);
        }])->where("slug", $this->slug)->first();
        $this->blogs = $category->blog;
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_category_blog_seo', Carbon::now()->addDays(30), function () {
            return CategoryBlogSeo::latest()->first();
        });
        if(isset($seoInfo)){
            SEOMeta::setTitle($seoInfo->title);
            SEOMeta::setDescription($seoInfo->description);
            SEOMeta::addKeyword($seoInfo->keyword);

            OpenGraph::setTitle($seoInfo->title);
            OpenGraph::setUrl(request()->url());
            OpenGraph::setDescription($seoInfo->description);
            OpenGraph::addImage(asset("storage/$seoInfo->image"), ['height' => 300, 'width' => 300]);

        }
    }

    public function render()
    {
        return view('livewire.category-blogs');
    }
}
