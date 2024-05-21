<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\GlobalClientTitle;
use Illuminate\Support\Facades\Cache;
use App\Models\GolobalClient as ModelsGolobalClient;

class GolobalClient extends Component
{
    public $clients;
    public $title;
    public function mount(){
        $this->clients = Cache::remember('dev_global_client', Carbon::now()->addDays(30), function () {
            return ModelsGolobalClient::latest()->get();
        });

        $this->title = Cache::remember('dev_global_title', Carbon::now()->addDays(30), function () {
            return GlobalClientTitle::latest()->first();
        });
    }

    public function render()
    {
        return view('livewire.home.golobal-client');
    }
}
