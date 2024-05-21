<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use App\Models\Review;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use App\Models\Testimonial as ModelsTestimonial;

class Testimonial extends Component
{
    public $testimonial;
    public $reviews;
    public function mount(){
        $this->testimonial = Cache::remember('dev_testimonial', Carbon::now()->addDays(30), function () {
            return ModelsTestimonial::latest()->first();
        });

        $this->reviews = Cache::remember('dev_reviews', Carbon::now()->addDays(30), function () {
            return Review::all();
        });
    }

    public function render()
    {
        return view('livewire.home.testimonial');
    }
}
