<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolphins Swimming Academy</title>

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/master.css') }}">

    <!-- BOOTSTRAP 5.2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css') }}">

    <!-- VENDOR ICONS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/mdi/css/materialdesignicons.min.css') }}"
        media="all" />

    <link rel="stylesheet" href="{{ asset('vendor/snackbar/custom_snackbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toast/toast.css') }}">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- SLICK SLIDER -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/slick/slick-theme.css') }}">


    {{-- STYLES TEMPLATE --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset('template/css/responsive.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    @yield('header')

</head>

<body>

    <header class="sticky-top bg-light">
        @include('layouts.includes.navbar')
    </header>

    <main>
        @include('layouts.includes.banner_home')
        @yield('body')
    </main>

    <div id="snackbar_container">
        <div class="side cont-left"></div>
        <div class="side cont-center"></div>
        <div class="side cont-right"></div>
    </div>

    <div id="toast_msg" class="toast align-items-center text-white bg_color-green_main border-0" role="alert"
        aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="2000" data-bs-autoHide="true">
        <div class="d-flex">
            <div class="toast-body text-center">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>

    @include('layouts.includes.footer')

    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
        </div>
    </div>

    <!-- CDN SLICE -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js') }}"></script>

    <script src="{{ asset('vendor/slick/slick.min.js') }}"></script>

    <script src="{{ asset('vendor/snackbar/custom_snackbar.js') }}"></script>
    <script src="{{ asset('vendor/toast/toast.js') }}"></script>

    <!-- MY APP JS -->
    <script src="{{ asset('js/slice-carusel.js') }}" id="js_slick"></script>
    <!-- TOOLTIP TIGGER -->
    <script src="{{ asset('js/tooltip_trigger.js') }}"></script>

    <script src="{{ asset('js/master.js') }}"></script>

    <script src="{{ asset('vendor/axios/axios.min.js') }}"></script>


    {{-- JS TEMPLATE --}}
    <!-- Javascript files-->
    <script src="{{asset('template/js/jquery.min.js')}}"></script>
    <script src="{{asset('template/js/popper.min.js')}}"></script>
    <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('template/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{asset('template/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('template/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('template/js/custom.js')}}"></script>
    <!-- javascript -->
    <script src="{{asset('template/js/owl.carousel.js')}}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <script>
        jQuery(() => {
            // show_toast('mensaje que va en el toast');
        });
    </script>

    @yield('footer')
</body>

</html>
