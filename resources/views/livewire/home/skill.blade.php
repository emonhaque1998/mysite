<section class="skill-area rel z-1">
    <div class="for-bgc-black pt-130 rpt-100 pb-100 rpb-70">
        <div class="container">
            <div class="row gap-100">
                <div class="col-lg-5">
                    <div class="skill-content-part rel z-2 rmb-55 wow fadeInUp delay-0-2s">
                        <div class="section-title mb-40">
                            <span class="sub-title mb-15">My Skills</span>
                            <h2>{!! $skill->title ?? "" !!}</h2>
                            <p>{{ $skill->description ?? "" }}</p>
                        </div>
                        <a href="{{ route("about") }}" wire:navigate class="theme-btn">{{ $skill->button_name ?? "" }} <i class="far fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="skill-items-wrap">
                        <div class="row">
                            @isset($skillItems)
                                @foreach ($skillItems as $skillItem)
                                    <div class="col-xl-3 col-lg-4 col-md-3 col-sm-4 col-6">
                                        <div class="skill-item wow fadeInUp delay-0-2s">
                                            <img width="55" height="55" src="{{ asset("storage/$skillItem->logo") }}" alt="Skill">
                                            <h5>{{ $skillItem->skill_name }}</h5>
                                            <span class="percent">{{ $skillItem->percentage }}%</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                        </div>
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
