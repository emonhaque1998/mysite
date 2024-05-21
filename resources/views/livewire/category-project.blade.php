<div>
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">Projects - {{ $slug }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("project") }}" wire:navigate>Projects</a></li>
                        <li class="breadcrumb-item active">{{ $slug }}</li>
                    </ol>
                </nav>
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
    <!-- Page Banner End -->


    <!-- Projects Area start -->
    <section class="projects-area pt-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="row project-masonry-active">
                @isset($projects)
                    @foreach ($projects as $project)
                        <div class="col-lg-6 item {{ $project->projectCategory->category_name }}">
                            <div class="project-item style-two wow fadeInUp delay-0-2s">
                                <div class="project-image">
                                    <img width="630" height="500" style="object-fit: cover;" src="{{ asset("storage/$project->banner") }}" alt="Project">
                                    <a href="{{ url("project-details/$project->slug") }}" wire:navigate class="details-btn"><i class="far fa-arrow-right"></i></a>
                                </div>
                                <div class="project-content">
                                    <span class="sub-title">{{ $project->projectCategory->category_name }}</span>
                                    <h3><a href="{{ url("project-details/$project->slug") }}" wire:navigate>{{ $project->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset

            </div>
            <div class="project-btn text-center wow fadeInUp delay-0-2s">
                <a href="#" class="theme-btn">View More Projects <i class="far fa-angle-right"></i></a>
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
    <!-- Projects Area end -->
</div>
