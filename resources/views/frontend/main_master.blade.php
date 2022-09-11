<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Rasalina - Personal Portfolio HTML Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->

        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/magnific-popup.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/fontawesome-all.min.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/slick.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/default.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/style.css") }}">
        <link rel="stylesheet" href="{{ asset("frontendFile/assets/css/responsive.css") }}">
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
        <header>
         @include('frontend.body.header')
        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>
        @yield('main')

        </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
        <footer class="footer">
            @include('frontend.body.footer')
        </footer>
        <!-- Footer-area-end -->




		<!-- JS here -->
        <script src="{{ asset('frontendFile/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/element-in-view.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/plugins.js') }}"></script>
        <script src="{{ asset('frontendFile/assets/js/main.js') }}"></script>
    </body>
</html>
