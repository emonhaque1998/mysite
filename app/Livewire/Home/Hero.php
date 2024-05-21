<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Hero as ModelsHero;
use Illuminate\Support\Facades\Cache;

class Hero extends Component
{
    public $hero;

    public function mount(){
        $this->hero = Cache::remember('dev_hero', Carbon::now()->addDays(30), function () {
            return ModelsHero::latest()->first();
        });
    }

    public function render()
    {
        return view('livewire.home.hero');
    }
}
