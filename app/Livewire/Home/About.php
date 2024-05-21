<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\About as ModelsAbout;
use Illuminate\Support\Facades\Cache;

class About extends Component
{
    public $about;

    public function mount(){
        $this->about = Cache::remember('dev_about', Carbon::now()->addDays(30), function () {
            return ModelsAbout::latest()->first();
        });
    }

    public function render()
    {
        return view('livewire.home.about');
    }
}
