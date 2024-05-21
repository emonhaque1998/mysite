<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Resume as ModelsResume;

class Resume extends Component
{
    public $resumes;
    public function mount(){
        $this->resumes = Cache::remember('dev_resumes', Carbon::now()->addDays(30), function () {
            return ModelsResume::all();
        });
    }

    public function render()
    {
        return view('livewire.home.resume');
    }
}
