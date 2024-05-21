<div>
    <!-- Page Banner Start -->
    <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
        <div class="container">
            <div class="banner-inner text-white">
                <h1 class="page-title wow fadeInUp delay-0-2s">{{ $project->title }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="{{ route("home") }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $project->title }}</li>
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


    <!-- ProjectDetails Area start -->
    <section class="projects-details-area pt-40 pb-130 rpb-100 rel z-1">
        <div class="container">
            <div class="projects-details-image mb-50 wow fadeInUp delay-0-2s">
                <img src="{{ asset("storage/$project->banner") }}" alt="Project Details">
            </div>
            <div class="row gap-120">
                <div class="col-lg-8">
                    <div class="project-details-content wow fadeInUp delay-0-2s">
                        <h3>{{ $project->sub_title }}</h3>
                        <style>
                            p strong{
                                color: #c9f31d !important;
                            }
                            p a{
                                color: #c9f31d !important;
                            }
                        </style>
                        <p class="big-letter">{!! $project->description !!}</p>
                        <ul class="list-style-one two-column mt-50 mb-40">
                            @isset($project->include)
                                @foreach ($project->include as $include)
                                <li>{{ $include }}</li>
                                @endforeach
                            @endisset
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp delay-0-4s">
                    <div class="project-details-info rmb-55" style="background-image: url({{ asset("assets/images/projects/project-info-bg.png") }});">
                        <div class="pd-info-item">
                            <span>Category</span>
                            <h5>{{ $project->projectCategory->category_name }}</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Clients</span>
                            <h5>{{ $project->clinet_name }}</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Clients Website</span>
                            <h5><a style="color: #1f1f1f;" href="{{ $project->project_url }}">{{ $project->project_url }}</a></h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Location</span>
                            <h5>{{ $project->location }}</h5>
                        </div>
                        <div class="pd-info-item">
                            <span>Published</span>
                            <h5>{{ Carbon\Carbon::parse($project->publish_date)->format("d/m/Y") }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-15">
                @isset($project->images)
                    @foreach ($project->images as $image)
                    <div class="col-lg-4 col-sm-6">
                        <div class="image mb-30 wow fadeInUp delay-0-2s">
                            <img src="{{ asset("storage/$image") }}" alt="Project Middle">
                        </div>
                    </div>
                    @endforeach
                @endisset
            </div>
            <div class="project-bottom-content mb-50 wow fadeInUp delay-0-2s">
                <h3 class="title mb-25">Client Review</h3>
                <p>{{ $project->summary }}</p>
            </div>
            <div class="tag-share py-30 wow fadeInUp delay-0-2s">
                <div class="item">
                    <b>Category</b>
                    <div class="tag-coulds">
                        <a href="{{ url("/project/category/" . $project->projectCategory->slug) }}" wire:navigate>{{ $project->projectCategory->category_name }}</a>
                    </div>
                </div>
                <div class="item">
                    <b>Share</b>
                    <div class="social-style-one">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
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
    <!-- Project Details Area end -->


    <!-- Related Projects Area start -->
    <livewire:project-details.related-project :category="$project->projectCategory->id" :projectID="$project->id">
    <!-- Related Projects Area end -->
</div>
