<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themesflat.co/html/taskose/taskose/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:43:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fonts.css')}}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/font-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('assets/css/nouislider.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet"type="text/css" href="{{asset('assets/css/styles.css')}}"/>
    @stack('style')
    <!-- manifest json -->
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />

    <title>@yield('title')</title>
</head>

<body>
    @include('partials.preload')

    @yield('content')

    

    

        
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/init.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/multiple-modal.js')}}"></script>


    @stack('js')


</body>

<!-- Mirrored from themesflat.co/html/taskose/taskose/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Sep 2024 20:46:11 GMT -->
</html>