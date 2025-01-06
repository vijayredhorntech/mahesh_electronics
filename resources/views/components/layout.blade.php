<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mahesh Refrigeration Company</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/logo.png')}}">

    <!-- Meta Descriptions for SEO -->
    <meta name="description" content="Refrigeration spare part dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Refrigeration Compressor dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="AC part dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Air conditioner parts dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Refrigeration Genuine spare parts dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Best air conditioner spare part dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Window Split air conditioner spare part dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Bitzer Compressor unit Mohali, Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Copeland Compressor unit Mohali, Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">
    <meta name="description" content="Refrigeration gas, copper pipe, fitting, oil, temperature controller, flow switch, insulation dealers in Zirakpur, Chandigarh, Panchkula, Ambala, Ropar, Baddi, Solan">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{--        google font link--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100..900;1,100..900&display=swap"
          rel="stylesheet">

    {{--        fontawesome link--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/remixicon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/jquery-range-ui.css')}}">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body style=" background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0, 0, 0, 0.8)), url({{asset('')}}); background-attachment: fixed; background-size: cover; background-position: center; background-repeat: no-repeat;">
{{--<body style="background-color: #000; background-image: linear-gradient(rgba(0,0,0,0.8), rgba(0, 0, 0, 0.8)), url({{asset('assets/images/bannerImage.jpg')}}); background-attachment: fixed; background-size: cover; background-position: center; background-repeat: no-repeat;">--}}
<!-- Loader -->
{{--    <div class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">--}}
{{--        <img src="{{asset('assets/images/logo.png')}}" alt="loader" class="absolute w-[60px] h-[60px]">--}}
{{--        <span class="loader w-[60px] h-[60px] relative"></span>--}}
{{--    </div>--}}

<x-header/>
{{ $slot}}
<x-footer/>

<!-- Back to top  -->
<a href="#Top"
   class="back-to-top result-placeholder transition-all duration-[0.3s] ease-in-out w-[38px] h-[38px] hidden fixed right-[15px] bottom-[15px] z-[10] rounded-[20px] cursor-pointer bg-[#fff] text-[#5eb595] border-[1px] border-solid border-[#5eb595] text-center text-[22px] leading-[1.6]">
    <i class="fa-solid fa-chevron-up text-[20px]"></i>

</a>

<!-- Plugins -->
<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.zoom.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/aos.js')}}"></script>
<script src="{{asset('assets/js/vendor/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/smoothscroll.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/countdownTimer.js')}}"></script>
<script src="{{asset('assets/js/vendor/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-range-ui.min.js')}}"></script>

<!-- main-js -->
<script src="{{asset('assets/js/main.js')}}"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3PF4JMKQGZ"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-3PF4JMKQGZ');
</script>
</body>
</html>
