<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
     {!! SEOMeta::generate(true) !!}
    {!! OpenGraph::generate(true) !!}
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.png") }}" type="image/x-icon">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset("assets/css/flaticon.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("assets/css/fontawesome-5.14.0.min.css") }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <!-- Magnific Popup -->
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.min.css") }}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset("assets/css/slick.min.css") }}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    @livewireStyles
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FXP057N4R0"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-FXP057N4R0');
    </script>
    <style>
        .active {
            color: #c9f31d !important;
            text-decoration: underline;
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7084059994980651"
     crossorigin="anonymous"></script>
</head>
<body class="home-one">
    <div class="page-wrapper">



        <section class="error-area pt-50 rpt-130 rpb-100 rel z-1 text-center">
            <div class="container">
                <div class="error-content">
                    <div class="image mb-20 rmb-55 wow fadeInUp delay-0-2s">
                        <img width="350" src="assets/images/shape/404-error.png" alt="Error">
                    </div>
                    <div class="section-title mb-20 wow fadeInUp delay-0-2s">
                        <h1 style="font-size: 34px">OPPS!</h1>
                        <h2>This Page Are Can't be Found</h2>
                    </div>
                    <a href="{{ route("home") }}" wire:navigate class="theme-btn wow fadeInUp delay-0-2s">Go To Homepage <i class="far fa-angle-right"></i></a>
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


    </div>
    <!--End pagewrapper-->


    <!-- Jquery -->
    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset("assets/js/appear.min.js") }}"></script>
    <!-- Slick -->
    <script src="{{ asset("assets/js/slick.min.js") }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset("assets/js/jquery.nice-select.min.js") }}"></script>
    <!-- Image Loader -->
    <script src="{{ asset("assets/js/imagesloaded.pkgd.min.js") }}"></script>
    <!-- Isotope -->
    <script src="{{ asset("assets/js/isotope.pkgd.min.js") }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset("assets/js/wow.min.js") }}"></script>
    <!-- Custom script -->
    <script src="{{ asset("assets/js/script.js") }}"></script>
    @livewireScripts



</body>
</html>
