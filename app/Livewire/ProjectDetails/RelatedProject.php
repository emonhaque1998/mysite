<?php

namespace App\Livewire\ProjectDetails;

use App\Models\ProjectCategory;
use Livewire\Component;

class RelatedProject extends Component
{
    public $category;
    public $projectID;

    public function mount($category, $projectID)
    {
        $this->category = $category;
        $this->projectID = $projectID;
    }

    public function render()
    {
        return view('livewire.project-details.related-project')->with([
            "categoryProject" => ProjectCategory::find($this->category)
        ]);
    }
}
