<?php

namespace App\Livewire;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use Livewire\Component;
use Illuminate\Support\Facades\Cache;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class BlogDetails extends Component
{

    public $blog;
    public $name = "";
    public $email = "";
    public $text = "";
    public $slug;
    public $blogId;
    public $facebookShare;
    public $twiterShare;
    public $contact;

    public function save(){
        Comment::create([
            "name" => $this->name,
            "email" => $this->email,
            "text" => $this->text,
            "blog_id" => $this->blog->id,
        ]);
    }

    public function mount($slug){
        $this->blog = Blog::where("slug", $slug)->first();
        $this->contact = Cache::remember('dev_contact', Carbon::now()->addDays(30), function () {
            return Contact::latest()->first();
        });

        $this->facebookShare = "https://www.facebook.com/sharer/sharer.php?u=" . request()->url();
        $this->twiterShare = "https://twitter.com/intent/tweet?url=" . request()->url();
        $this->seoMount();
    }

    public function seoMount(){
        if(isset($this->blog)){
            SEOMeta::setTitle($this->blog->meta_title);
            SEOMeta::setDescription($this->blog->meta_description);
            SEOMeta::addKeyword($this->blog->meta_keyword);
            SEOMeta::addMeta('article:published_time', $this->blog->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $this->blog->blogCategory->category_name, 'property');

            OpenGraph::setTitle($this->blog->meta_title);
            OpenGraph::setUrl(request()->url());
            OpenGraph::setDescription($this->blog->meta_description);
            OpenGraph::addImage(asset("storage/" . $this->blog->meta_image), ['height' => 300, 'width' => 300]);
            OpenGraph::addProperty('type', 'article');

        }
    }

    public function render()
    {
        return view('livewire.blog-details');
    }
}
