<section class="projects-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Latest Works</span>
                    <h2>Explore My Popular <span>Projects</span></h2>
                </div>
            </div>
        </div>
        @isset($projects)
            @foreach ($projects as $key => $project)
                @if ($key % 2 == 0)
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{ asset("storage/$project->small_banner") }}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">{{ $project->projectCategory->category_name }}</span>
                            <h2><a href="{{ url("project-details/$project->slug") }}" wire:navigate>{{ $project->title }}</a></h2>
                            <p>{{ substr($project->summary, 0, 100) }}...</p>
                            <a href="{{ url("project-details/$project->slug") }}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div class="row align-items-center pb-25">
                    <div class="col-lg-6 order-lg-2">
                        <div class="project-image wow fadeInLeft delay-0-2s">
                            <img src="{{ asset("storage/$project->small_banner") }}" alt="Project">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 ms-auto">
                        <div class="project-content wow fadeInRight delay-0-2s">
                            <span class="sub-title">{{ $project->projectCategory->category_name }}</span>
                            <h2><a href="{{ url("project-details/$project->slug") }}" wire:navigate>{{ $project->title }}</a></h2>
                            <p>{{ substr($project->description, 0, 100) }}...</p>
                            <a href="{{ url("project-details/$project->slug") }}" class="details-btn"><i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        @endisset


        <div class="project-btn text-center wow fadeInUp delay-0-2s">
            <a href="{{ route("project") }}" wire:navigate class="theme-btn">View More Projects <i class="far fa-angle-right"></i></a>
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
