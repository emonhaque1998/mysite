<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Contact as ModelsContact;

class Contact extends Component
{
    public $contact;
    public function mount(){
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return ModelsContact::latest()->first();
        });
    }

    public function render()
    {
        return view('livewire.home.contact');
    }
}
