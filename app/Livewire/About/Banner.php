<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\AboutPage;
use Illuminate\Support\Facades\Cache;

class Banner extends Component
{
    public $about;
    public function mount(){
        $this->about = Cache::remember('dev_about_page', Carbon::now()->addDays(30), function () {
            return AboutPage::latest()->first();
        });
    }


    public function render()
    {
        return view('livewire.about.banner');
    }
}
