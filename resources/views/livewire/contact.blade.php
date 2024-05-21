<div>

        <!-- Page Banner Start -->
        <section class="page-banner-area pt-200 rpt-140 pb-100 rpb-60 rel z-1 text-center">
            <div class="container">
                <div class="banner-inner text-white">
                    <h1 class="page-title wow fadeInUp delay-0-2s">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="{{ route("home") }}" wire:navigate>Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
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


        <!-- Contact Page Area start -->
        <section class="contact-page pt-40 pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="contact-page-content rmb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Get In Touch</span>
                                <h2>Let’s Talk For your <span>Next Projects</span></h2>
                                <p>Sed ut perspiciatis unde omnin natus totam rem aperiam eaque inventore veritatis</p>
                            </div>
                            <h6>Main Office</h6>
                            <div class="widget_contact_info mb-35">
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i>{{ $contact->address ?? "" }}</li>
                                    <li><i class="far fa-envelope"></i><a href="mailto:support@gmail.com">{{ $contact->email ?? "" }}</a></li>
                                    <li><i class="far fa-phone"></i><a href="callto:+880(123)45688">{{ $contact->number ?? "" }}</a></li>
                                </ul>
                            </div>
                            <h5>Follow Me</h5>
                            <div class="social-style-one mt-10">
                                @isset($contact)
                                <a href="{{ $contact->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $contact->twiter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $contact->linkdin }}"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $contact->instragram }}"><i class="fab fa-instagram"></i></a>
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-page-form contact-form form-style-one wow fadeInUp delay-0-2s">
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
        <!-- Contact Page Area end -->


        <!-- Location Map Area Start -->
        <div class="contact-page-map pb-120 rpb-90 wow fadeInUp delay-0-2s">
            <div class="container">
                <div class="our-location">
                    <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Manikganj%20Sadar,%20Manikganj+(Developer%20Eman)&amp;t=k&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe></div>
                </div>
            </div>
        </div>
        <!-- Location Map Area End -->

</div>
