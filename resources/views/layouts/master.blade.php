<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dolphins Swimming Academy</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('imgs/logo_fondo.jpg')}}" type="image/x-icon">

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/class.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/carrusel.css') }}">
    
    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css') }}">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- FLICKITY FRAMEWORK -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/flickity/css/flickity.min.css') }}">

    @yield('header')

</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <header class="sticky-top bg-light">
        @include('layouts.includes.navbar')
    </header>

    <main>
        @if((session('section') !== 'class') && (session('section') !== 'contact') && (session('section') !== 'plans') && (session('section') !== 'characteristics'))
            @include('layouts.includes.banner_home')
        @endif

        @yield('body')
    </main>
        
    <button type="button" class="btn bg_color-blue-derivate btn-floating btn-sm rounded-circle" id="scroll-top">
        <i class="bi bi-chevron-up text-white"></i>
    </button>

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

    {{-- MY SCRIPT BTN UP --}}
    <script src="{{ asset('js/btn-float.js') }}"></script>

    {{-- JQUERY FRAMEWORK --}}
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
