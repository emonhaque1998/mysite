<section class="contact-area pt-95 pb-130 rpt-70 rpb-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact-content-part pt-5 rpt-0 rmb-55 wow fadeInUp delay-0-2s">
                    <div class="section-title mb-40">
                        <span class="sub-title mb-15">Get In Touch</span>
                        <h2>{!! $contact->title ?? "Let’s Talk For your <span>Next Projects" !!}</span></h2>
                        <p>{{ $contact->description ?? "Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis" }}</p>
                    </div>
                    <ul class="list-style-two">
                        @isset($contact->why_chosse_me)
                            @foreach ($contact->why_chosse_me as $chosse)
                                <li>{{ $chosse }}</li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form contact-form-wrap form-style-one wow fadeInUp delay-0-4s">
                    <livewire:contact.message >
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
