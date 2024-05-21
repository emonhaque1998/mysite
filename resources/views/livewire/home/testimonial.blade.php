<section class="testimonials-area rel z-1">
    <div class="for-bgc-black py-130 rpy-100">
        <div class="container">
            <div class="row gap-90">
                <div class="col-lg-4">
                    <div class="testimonials-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">Clients Testimonials</span>
                            <h2>{!! $testimonial->title ?? "" !!}</h2>
                            <p>{{ $testimonial->shot_description ?? "Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis" }}</p>
                        </div>
                        <div class="slider-arrows">
                            <button class="testimonial-prev"><i class="fal fa-arrow-left"></i></button>
                            <button class="testimonial-next"><i class="fal fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testimonials-wrap">
                        @isset($reviews)
                            @foreach ($reviews as $review)
                                <div class="testimonial-item wow fadeInUp delay-0-3s">
                                    <div class="author">
                                        <img height="85" width="85" style="border-radius: 50%" src="{{ asset("storage/$review->avater") }}" alt="Author">
                                    </div>
                                    <div class="text">{{ $review->description }}</div>
                                    <div class="testi-des">
                                        <h5>{{ $review->client_name }}</h5>
                                        <span>{{ $review->position }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
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
