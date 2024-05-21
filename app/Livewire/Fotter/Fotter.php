<?php

namespace App\Livewire\Fotter;

use Carbon\Carbon;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class Fotter extends Component
{
    public $contact;
    public function mount(){
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return Contact::latest()->first();
        });
    }

    public function render()
    {
        return view('livewire.fotter.fotter');
    }
}
