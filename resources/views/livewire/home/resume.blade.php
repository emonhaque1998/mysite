<section class="resume-area pt-130 rpt-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="big-icon mt-85 rmt-0 rmb-55 wow fadeInUp delay-0-2s">
                    <i class="flaticon-asterisk-1"></i>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="section-title mb-60 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">My Resume</span>
                            <h2>Real <span>Problem Solutions</span> Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="resume-items-wrap">
                    <div class="row justify-content-between">
                        @isset($resumes)
                            @foreach ($resumes as $resume)
                                <div class="col-xl-5 col-md-6">
                                    <div class="resume-item wow fadeInUp delay-0-3s">
                                        <div class="icon">
                                            <i class="far fa-arrow-right"></i>
                                        </div>
                                        <div class="content">
                                            <span class="years">{{ $resume->duration }}</span>
                                            <h4>{{ $resume->title }}</h4>
                                            <span class="company">{{ $resume->post }}</span>
                                        </div>
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
