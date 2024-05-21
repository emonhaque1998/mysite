<div class="about-main-image-area pt-40">
    <div class="container">
        <div class="about-main-image wow fadeInUp delay-0-5s">
            @isset($about->banner)
                <img src="{{ asset("storage/$about->banner") }}" alt="About Page">
            @endisset
        </div>
    </div>
</div>
