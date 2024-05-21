<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Service as ModelsService;

class Service extends Component
{
    public $services;
    public function mount(){
        $this->services = Cache::remember('dev_services', Carbon::now()->addDays(30), function () {
            return ModelsService::all();
        });
    }

    public function render()
    {
        return view('livewire.home.service');
    }
}
