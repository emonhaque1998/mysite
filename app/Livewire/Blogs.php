<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\BlogSeo;
use Livewire\Component;
use App\Models\BlogDetail;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class Blogs extends Component
{
    public $searchValue = "";
    public $blogs;

    public $blogDetails;
    public $limit = 8;

    public function mount(){
        $this->blogs = Blog::latest()->take($this->limit)->get();

        $this->blogDetails = Cache::remember('dev_blogDetails', Carbon::now()->addDays(30), function () {
            return BlogDetail::latest()->first();
        });

        $this->seoMount();
    }

    public function searchBlog(){
        $this->blogs = Blog::where("title", 'like', '%'.$this->searchValue.'%')->take($this->limit)->get();
    }

    public function loadMore(){
        $this->limit += 4;
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_blog_seo', Carbon::now()->addDays(30), function () {
            return BlogSeo::latest()->first();
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
        return view('livewire.blogs');
    }
}
