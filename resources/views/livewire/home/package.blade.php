<section class="pricing-area pt-130 rpt-100 rel z-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Pricing Package</span>
                    <h2>Amazing <span>Pricing</span> For your Projects</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @isset($packages)
                @foreach ($packages as $package)
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-item wow fadeInUp delay-0-2s">
                        <div class="pricing-header">
                            <h4 class="title">{{ $package->name }}</h4>
                            <p class="save-percent">Try Out {{ $package->name }} Save <span>{{ $package->saving_parcentage }}%</span></p>
                            <span class="price">{{ $package->price }}</span>
                        </div>
                        <div class="pricing-details">
                            <p>{{ $package->short_description }}</p>
                            <ul>
                                @isset($package->includes)
                                    @foreach ($package->includes as $include)
                                        <li>{{ $include }}</li>
                                    @endforeach
                                @endisset
                            </ul>
                            <a href="{{ route("contact") }}" wire:navigate class="theme-btn">Choose Package <i class="far fa-angle-right"></i></a>
                        </div>
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
