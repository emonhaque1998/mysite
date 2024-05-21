<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\AboutSeo;
use App\Models\AboutPage;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class About extends Component
{
    public $about;
    public function mount(){
        $this->about = Cache::remember('dev_about_page', Carbon::now()->addDays(30), function () {
            return AboutPage::latest()->first();
        });

        $this->seoMount();
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_about_seo', Carbon::now()->addDays(30), function () {
            return AboutSeo::latest()->first();
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
        return view('livewire.about');
    }
}
