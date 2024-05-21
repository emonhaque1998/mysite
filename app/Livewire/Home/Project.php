<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Project as ModelsProject;

class Project extends Component
{
    public $projects;
    public function mount(){
        $this->projects = Cache::remember('dev_projects', Carbon::now()->addDays(30), function () {
            return ModelsProject::take(4)->get();
        });
    }

    public function render()
    {
        return view('livewire.home.project');
    }
}
