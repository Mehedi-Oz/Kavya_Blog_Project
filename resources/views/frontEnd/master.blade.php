<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.codevibrant.com/html/kavya/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:13:10 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="48x48" href="{{asset('front-end-asset')}}/images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,500,500i,600&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/bootstrap.min.css" />

    <!-- Fontawesome CSS-->
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/all.css" />

    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/slick-theme.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/preloader.css" />
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/responsive.css" />
    <link rel="stylesheet" href="{{asset('front-end-asset')}}/css/dark.css" />

    <title>@yield('title')</title>

</head>

<body>
<!-- Preloader -->
<div class="preloader-wrapper">
    <div class="preloader">
        <div class="preloader-circle" id="status">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>
<!-- Preloader end -->
<main class="kavya-home-3">
    @include('frontEnd.include.header')
    <!-- header end -->

    @yield('content')

    <!-- Footer section -->
    @include('frontEnd.include.footer')
    <!-- Footer section end -->
</main>

<!-- Scroll to top -->
<div id="stop" class="scroll-to-top">
    <span><a href="#"><i class="fas fa-arrow-up"></i></a></span>
</div>
<!--  Scroll to top end -->

<!-- Javascript -->
<script src="{{asset('front-end-asset')}}/js/jquery-3.4.1.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/bootstrap.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/slick.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/jquery.sticky.js"></script>
<script src="{{asset('front-end-asset')}}/js/ResizeSensor.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/theia-sticky-sidebar.min.js"></script>
<script src="{{asset('front-end-asset')}}/js/main.js"></script>
</body>


<!-- Mirrored from demo.codevibrant.com/html/kavya/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 13:13:11 GMT -->
</html>
