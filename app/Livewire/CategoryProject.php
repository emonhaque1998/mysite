<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ProjectCategory;
use App\Models\CategoryProjectSeo;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class CategoryProject extends Component
{

    public $projects;
    public $slug;

    public function mount($slug)
    {
        $this->seoMount();
        $this->slug = $slug;
        $category = ProjectCategory::with(['project' => function ($query) {
            $query->take(8);
        }])->where("slug", $slug)->first();
        $this->projects = $category->project;
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_category_project_seo', Carbon::now()->addDays(30), function () {
            return CategoryProjectSeo::latest()->first();
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
        return view('livewire.category-project');
    }
}
