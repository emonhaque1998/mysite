<div>
        <!-- Page Banner Start -->
        <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title wow fadeInUp delay-0-2s">About Me</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                            <li class="breadcrumb-item active">About Me</li>
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



        <livewire:about.banner >

        <!-- About Page Area start -->
        <livewire:home.about >
        <!-- About Page Area end -->


        <!-- Services Area start -->
        <livewire:home.service >
        <!-- Services Area end -->


        <!-- FAQs Area start -->
        <section id="faqs" class="faqs-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-image-part rmb-55 wow fadeInUp delay-0-2s">
                            @isset($about->images)
                            <div class="image-one">
                                <img width="410" height="488" style="object-fit: cover" src="{{ asset("storage/" . $about->images[0]) }}" alt="FAQ">
                            </div>
                            <div class="image-two">
                                <img width="410" height="397" style="object-fit: cover" src="{{ asset("storage/" . $about->images[1]) }}" alt="FAQ">
                            </div>
                            <div class="square-shape"></div>
                            @endisset
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content-part rel z-2">
                            <div class="section-title mb-40 wow fadeInUp delay-0-4s">
                                <h2>{!! $about->title ?? "Professional Solutions For Your <span>Digital Product</span> Design and development" !!}</h2>
                            </div>
                            <livewire:about.faq >
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
        <!-- FAQs Area end -->


        <!-- Testimonial Area start -->
        <livewire:home.testimonial >
        <!-- Testimonial Area end -->


        <!-- Client Log start -->
        <livewire:home.golobal-client />
        <!-- Client Log end -->
</div>
