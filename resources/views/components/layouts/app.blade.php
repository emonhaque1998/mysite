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


        @include("layouts.header")


        <!--Form Back Drop-->
        <div class="form-back-drop"></div>



        {{ $slot }}


        <!-- footer area start -->
        <livewire:fotter.fotter />
        <!-- footer area end -->

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
