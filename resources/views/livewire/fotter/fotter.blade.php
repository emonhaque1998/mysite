<footer class="main-footer rel z-1">
    <div class="footer-top-wrap bgc-black pt-100 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12">
                    <div class="footer-widget widget_logo wow fadeInUp delay-0-2s">
                        <div class="footer-logo">
                            <a href="{{ route("home") }}" wire:navigate><img width="160" src="{{ asset("assets/images/my-logo/logo.png") }}" alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="footer-widget widget_nav_menu wow fadeInUp delay-0-4s">
                        <h6 class="footer-title">Quick Link</h6>
                        <ul>
                            <li><a href="{{ route("service") }}" wire:navigate>Service</a></li>
                            <li><a href="{{ route("project") }}" wire:navigate>Projects</a></li>
                            <li><a href="{{ route("service") }}" wire:navigate>Pricing</a></li>
                            <li><a href="{{ route("about") }}" wire:navigate>Faqs</a></li>
                            <li><a href="{{ route("contact") }}" wire:navigate>Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-widget widget_newsletter wow fadeInUp delay-0-4s">
                        <form action="#">
                            <label for="email-address"><i class="far fa-envelope"></i></label>
                            <input id="email-address" type="email" placeholder="Email Address" required>
                            <button>Sign Up <i class="far fa-angle-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="footer-widget widget_contact_info wow fadeInUp delay-0-6s">
                        <h6 class="footer-title">Address</h6>
                        <ul>
                            <li><i class="far fa-map-marker-alt"></i> {{ $contact->address ?? "" }}</li>
                            <li><i class="far fa-envelope"></i> <a href="mailto:support@gmail.com">{{ $contact->email ?? "" }}</a></li>
                            <li><i class="far fa-phone"></i> <a href="callto:+880(123)45688">{{ $contact->number ?? "" }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-20 pb-5 rpt-25">
        <div class="container">
           <div class="row">
               <div class="col-lg-6">
                    <div class="copyright-text">
                        <p>Copyright @2024, Design By <a href="https://join.skype.com/invite/pUIUl1nKv0EN">Eman H.</a></p>
                    </div>
               </div>
               <div class="col-lg-6 text-lg-end">
                   <ul class="footer-bottom-nav">
                    @isset($contact)
                        <li><a href="{{ $contact->facebook }}">Facebook</a></li>
                        <li><a href="{{ $contact->twiter }}">Twitter</a></li>
                        <li><a href="{{ $contact->instragram }}">Instagram</a></li>
                        <li><a href="{{ $contact->linkdin }}">LinkedIn</a></li>
                    @endisset
                   </ul>
               </div>
           </div>
           <!-- Scroll Top Button -->
            <button class="scroll-top scroll-to-target" data-target="html"><span class="fas fa-angle-double-up"></span></button>
        </div>
        <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
           <span></span><span></span>
        </div>
    </div>
</footer>
