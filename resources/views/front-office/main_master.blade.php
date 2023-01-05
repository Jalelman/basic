<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Jalel - Personal Portfolio HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('front-office/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front-office/assets/css/responsive.css')}}">
    </head>
    <body>

        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('front-office.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        @yield('main')
        <!-- main-area-end -->



        <!-- Footer-area -->
        @include('front-office.body.footer')
        <!-- Footer-area-end -->




		<!-- JS here -->
        <script src="{{asset('front-office/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/element-in-view.js')}}"></script>
        <script src="{{asset('front-office/assets/js/slick.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/ajax-form.js')}}"></script>
        <script src="{{asset('front-office/assets/js/wow.min.js')}}"></script>
        <script src="{{asset('front-office/assets/js/plugins.js')}}"></script>
        <script src="{{asset('front-office/assets/js/main.js')}}"></script>
    </body>
</html>
