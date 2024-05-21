<?php

namespace App\Livewire\Blog;

use Carbon\Carbon;
use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class LastTwoBlogs extends Component
{
    public $blogs;
    public function mount(){
        $this->blogs = Cache::remember('dev_blogs_two', Carbon::now()->addDays(30), function () {
            return Blog::latest()->take(2)->get();
        });
    }

    public function render()
    {
        return view('livewire.blog.last-two-blogs');
    }
}
