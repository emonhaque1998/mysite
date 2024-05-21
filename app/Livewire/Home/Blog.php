<?php

namespace App\Livewire\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Blog as ModelsBlog;
use Illuminate\Support\Facades\Cache;

class Blog extends Component
{
    public $blogs;
    public function mount(){
        $this->blogs = Cache::remember('dev_blogs_two', Carbon::now()->addDays(30), function () {
            return ModelsBlog::latest()->take(2)->get();
        });
    }

    public function render()
    {
        return view('livewire.home.blog');
    }
}
