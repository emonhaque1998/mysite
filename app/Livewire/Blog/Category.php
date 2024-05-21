<?php

namespace App\Livewire\Blog;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Cache;

class Category extends Component
{
    public $categories;

    public function mount(){
        $this->categories = Cache::remember('dev_categories', Carbon::now()->addDays(30), function () {
            return BlogCategory::all();
        });
    }

    public function render()
    {
        return view('livewire.blog.category');
    }
}
