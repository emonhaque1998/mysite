<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\ProjectCategory;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Models\Project as ModelsProject;
use App\Models\ProjectSeo;
use Artesaos\SEOTools\Facades\OpenGraph;

class Project extends Component
{

    public $limit = 8;
    public $categories;

    public function mount(){
        $this->categories = Cache::remember('dev_categories_project', Carbon::now()->addDays(30), function () {
            return ProjectCategory::all();
        });

        $this->seoMount();
    }

    public function loadMore(){
        $this->limit += 4;
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_project_seo', Carbon::now()->addDays(30), function () {
            return ProjectSeo::latest()->first();
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
        return view('livewire.project')->with([
            "projects" => ModelsProject::latest()->take($this->limit)->get()
        ]);
    }
}
