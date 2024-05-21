<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Package as ModelsPackage;

class Package extends Component
{
    public $packages;
    public function mount(){
        $this->packages = Cache::remember('dev_packages', Carbon::now()->addDays(30), function () {
            return ModelsPackage::all();
        });
    }

    public function render()
    {
        return view('livewire.home.package');
    }
}
