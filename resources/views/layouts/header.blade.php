<!-- main header -->
<header class="main-header menu-absolute">
    <!--Header-Upper-->
    <div class="header-upper">
        <div class="container container-1620 clearfix">

            <div class="header-inner rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo"><a href="{{ route("home") }}" wire:navigate><img width="160" src="{{ asset("assets/images/my-logo/logo.png") }}" alt="Logo" title="Logo"></a></div>
                </div>

                <div class="nav-outer clearfix mx-auto">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                           <div class="mobile-logo my-15">
                               <a href="{{ route("home") }}" wire:navigate>
                                    <img width="160" src="{{ asset("assets/images/my-logo/logo.png") }}" alt="Logo" title="Logo">
                               </a>
                           </div>

                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle me-4" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}" class="{{ request()->routeIs("home") ? "active" : null }}" wire:navigate>Home</a>
                                </li>
                                <li><a href="{{ route("about") }}" class="{{ request()->routeIs("about") ? "active" : null }}" wire:navigate>about</a></li>
                                <li><a href="{{ url("/service") }}" class="{{ request()->routeIs("service") ? "active" : null }}" wire:navigate>services</a></li>
                                <li><a href="{{ url("/project") }}" class="{{ request()->routeIs("project") ? "active" : null }}" wire:navigate>projects</a>
                                </li>
                                <li><a href="{{ url("/blogs") }}" class="{{ request()->routeIs("blogs") ? "active" : null }}" wire:navigate>blog</a>
                                </li>
                                <li><a href="{{ url("/contact") }}" class="{{ request()->routeIs("contact") ? "active" : null }}" wire:navigate>Contact</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

                <div class="menu-btns">
                    <!-- menu sidbar -->
                    <style>
                        #element {
                            display: block;
                        }

                        /* Media query for screens smaller than 768px (typical for mobile devices) */
                        @media only screen and (max-width: 768px) {
                            /* Hide the element with display: none */
                            #contact {
                                display: none;
                            }
                        }
                    </style>
                    <a id="contact" href="{{ url("login") }}" wire:navigate class="theme-btn">Client Area</a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>
