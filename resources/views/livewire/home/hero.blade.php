<section class="main-hero-area pt-150 pb-80 rel z-1">
    <div class="container container-1620">
        <div class="row align-items-center">
            <div class="col-lg-4 col-sm-7">
                <div class="hero-content rmb-55 wow fadeInUp delay-0-2s">
                    <span class="h2">{{ $hero->top_title ?? "No title" }} </span>
                    <h1>{!! $hero->title ?? "Not Found" !!}</h1>
                    <p>{{ $hero->description ?? "Not Found" }}</p>
                    <div class="hero-btns">
                        <a href="{{ route("contact") }}" wire:navigate class="theme-btn">Hire Me <i class="far fa-angle-right"></i></a>
                        @isset($hero)
                            <a href="{{ url("/download/$hero->download_cv_attachment") }}" class="read-more">Download Resume <i class="far fa-angle-right"></i></a>
                        @endisset
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-5 order-lg-3">
                <div class="hero-counter-wrap ms-lg-auto rmb-55 wow fadeInUp delay-0-4s">
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text plus" data-speed="3000" data-stop="{{ $hero->experience ?? "0" }}">0</span>
                        <span class="counter-title">Years Of Experience</span>
                    </div>
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text plus" data-speed="3000" data-stop="{{ $hero->project_complete ?? "0" }}">0</span>
                        <span class="counter-title">Project Complete</span>
                    </div>
                    <div class="counter-item counter-text-wrap">
                        <span class="count-text percent" data-speed="3000" data-stop="{{ $hero->satisfactions ?? "0" }}">0</span>
                        <span class="counter-title">Client Satisfactions</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="author-image-part wow fadeIn delay-0-3s">
                    <div class="bg-circle"></div>
                    @isset($hero)
                        <img src="{{ asset("storage/" . $hero->hero_image) }}" alt="Author">
                    @endisset
                    <div class="progress-shape">
                        <img src="assets/images/hero/progress-shape.png" alt="Progress">
                    </div>
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
