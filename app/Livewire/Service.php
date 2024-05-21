<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ServiceSeo;
use App\Models\ServicePage;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class Service extends Component
{
    public $service;
    public function mount(){
        $this->service = Cache::remember('dev_service_page', Carbon::now()->addDays(30), function () {
            return ServicePage::latest()->first();
        });

        $this->seoMount();
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_service_seo', Carbon::now()->addDays(30), function () {
            return ServiceSeo::latest()->first();
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
        return view('livewire.service');
    }
}
