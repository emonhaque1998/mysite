<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;

class ProjectDetails extends Component
{
    public $project;

    public function mount($slug)
    {
        // Fetch the post by slug
        $this->project = Project::where('slug', $slug)->first();

        $this->seoMount();
    }

    public function seoMount(){
        if(isset($this->project)){
            SEOMeta::setTitle($this->project->meta_title);
            SEOMeta::setDescription($this->project->meta_description);
            SEOMeta::addKeyword($this->project->meta_keyword);
            SEOMeta::addMeta('article:published_time', $this->project->created_at->toW3CString(), 'property');
            SEOMeta::addMeta('article:section', $this->project->projectCategory->category_name, 'property');

            OpenGraph::setTitle($this->project->meta_title);
            OpenGraph::setUrl(request()->url());
            OpenGraph::setDescription($this->project->meta_description);
            OpenGraph::addImage(asset("storage/". $this->project->meta_image), ['height' => 300, 'width' => 300]);
            OpenGraph::addProperty('type', 'article');

        }
    }

    public function render()
    {
        return view('livewire.project-details');
    }
}
