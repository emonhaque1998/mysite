<section class="related-projects-area pb-70 rpb-40 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <h2>Related Projects</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @isset($categoryProject->project)
                @foreach ($categoryProject->project as $project)
                    @if ($project->id != $projectID)
                        <div class="col-xl-4 col-md-6">
                            <div class="project-item style-two wow fadeInUp delay-0-2s">
                                <div class="project-image before-after-none">
                                    <img height="400" width="410" style="object-fit: cover" src="{{ asset("storage/$project->banner") }}" alt="Project">
                                </div>
                                <div class="project-content">
                                    <span class="sub-title">{{ $project->projectCategory->category_name }}</span>
                                    <h4><a href="{{ url("project-details/$project->slug") }}" wire:navigate>{{ $project->title }}</a></h4>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endisset
        </div>
    </div>
    <div class="bg-lines">
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
       <span></span><span></span>
    </div>
</section>
