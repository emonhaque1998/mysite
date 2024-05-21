<section class="services-area pt-130 rpt-100 pb-100 rpb-70 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Popular Services</span>
                    <h2>My <span>Special Service</span> For your Business Development</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @isset($services)
                @foreach ($services as $key => $service)
                    <div class="col-lg-6">
                        <div class="service-item wow fadeInUp delay-0-2s">
                            <div class="number">0{{ ++$key }}.</div>
                            <div class="content">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ $service->sub_title }}</p>
                            </div>
                            <a href="#" wire:click.prevent class="details-btn"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
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
