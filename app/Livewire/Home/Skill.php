<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\SkillItem;
use App\Models\Skill as ModelsSkill;
use Illuminate\Support\Facades\Cache;

class Skill extends Component
{
    public $skill;
    public $skillItems;
    public function mount(){
        $this->skill = Cache::remember('dev_skill', Carbon::now()->addDays(30), function () {
            return ModelsSkill::latest()->first();
        });

        $this->skillItems = Cache::remember('dev_skillItems', Carbon::now()->addDays(30), function () {
            return SkillItem::all();
        });
    }


    public function render()
    {
        return view('livewire.home.skill');
    }
}
