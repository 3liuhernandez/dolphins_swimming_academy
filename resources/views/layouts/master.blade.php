<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolphins Swimming Academy</title>

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/class.css') }}">

    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css') }}">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @yield('header')

</head>

<body>

    <header class="sticky-top bg-light">
        @include('layouts.includes.navbar')
    </header>

    <main>
        @if(session('section') !== 'class')
            @include('layouts.includes.banner_home')
        @endif

        @yield('body')
    </main>

    <div id="snackbar_container">
        <div class="side cont-left"></div>
        <div class="side cont-center"></div>
        <div class="side cont-right"></div>
    </div>

    <div id="toast_msg" class="toast align-items-center text-white bg_color-green_main border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="2000" data-bs-autoHide="true">
        <div class="d-flex">
            <div class="toast-body text-center">Hello, world! This is a toast message.</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    @include('layouts.includes.footer')

    <!-- copyright section start -->
    <div class="copyright_section bg-dark">
        <div class="container p-0">
            <p class="text-center m-0 text-white">2023 All Rights Reserved. Design by</p>
        </div>
    </div>

    <!-- CDN SLICE -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    {{-- JS BOOTSTRAP 5.3 --}}
    <script src="{{ asset('vendor/bs/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        jQuery(() => {
            // show_toast('mensaje que va en el toast');
        });
    </script>

    @yield('footer')
</body>

</html>
