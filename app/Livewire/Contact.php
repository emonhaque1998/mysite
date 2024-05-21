<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\ContactSeo;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use App\Models\Contact as ModelsContact;
use Artesaos\SEOTools\Facades\OpenGraph;

class Contact extends Component
{
    public $contact;
    public function mount(){
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return ModelsContact::latest()->first();
        });

        $this->seoMount();
    }

    public function seoMount(){
        $seoInfo = Cache::remember('dev_contact_seo', Carbon::now()->addDays(30), function () {
            return ContactSeo::latest()->first();
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
        return view('livewire.contact');
    }
}
