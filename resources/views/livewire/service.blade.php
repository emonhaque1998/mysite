<div>

        <!-- Page Banner Start -->
        <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Popular Service</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                            <li class="breadcrumb-item active">Popular Service</li>
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


        <!-- What I Do Area start -->
        <section class="what-i-do-area pt-25 rpt-0 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="what-i-do-images rmb-55 wow fadeInUp delay-0-2s">
                            @isset($service)
                            <div class="first-image">
                                <img src="{{ asset("storage/$service->first_image") }}" alt="What I do">
                            </div>
                            <div class="last-image">
                                <img src="{{ asset("storage/$service->second_image") }}" alt="What I do">
                            </div>
                            @endisset
                            <div class="icon first"><i class="flaticon-asterisk-1"></i></div>
                            <div class="icon last"><i class="flaticon-asterisk-1"></i></div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="what-i-do-content wow fadeInUp delay-0-4s">
                            <div class="section-title mb-40">
                                <span class="sub-title mb-15">What I Do</span>
                                <h2>{!! $service->title ?? "Real <span>Problem Solutions</span> Experience" !!}</h2>
                                <p>{{ $service->description ?? "" }} </p>
                            </div>
                            <ul class="list-style-two pb-50">
                                @isset($service->include)
                                    @foreach ($service->include as $include)
                                        <li>{{ $include }}</li>
                                    @endforeach
                                @endisset
                            </ul>
                            <a href="{{ route("about") }}" wire:navigate class="theme-btn">Learn More <i class="far fa-angle-right"></i></a>
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
        <!-- What I Do Area end -->


        <!-- Services Area start -->
        <livewire:home.service >
        <!-- Services Area end -->


        <!-- Pricing Area start -->
        <livewire:home.package >
        <!-- Pricing Area end -->
</div>
