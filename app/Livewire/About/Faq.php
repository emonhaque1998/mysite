<?php

namespace App\Livewire\About;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Faq as ModelsFaq;
use Illuminate\Support\Facades\Cache;

class Faq extends Component
{
    public $faqs;
    public function mount(){
        $this->faqs = Cache::remember('dev_faqs', Carbon::now()->addDays(30), function () {
            return ModelsFaq::all();
        });
    }

    public function render()
    {
        return view('livewire.about.faq');
    }
}
