<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\HomeSeo;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class Home extends Component
{
    public function mount(){
        $this->seoMount();
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_home_seo', Carbon::now()->addDays(30), function () {
            return HomeSeo::latest()->first();
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
        return view('livewire.home');
    }
}
