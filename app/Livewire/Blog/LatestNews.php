<?php

namespace App\Livewire\Blog;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class LatestNews extends Component
{
    public $blogs;
    public function mount(){
        $this->blogs = Cache::remember('dev_three_blogs', Carbon::now()->addDays(30), function () {
            return Blog::latest()->take(3)->get();
        });
    }

    public function render()
    {
        return view('livewire.blog.latest-news');
    }
}
