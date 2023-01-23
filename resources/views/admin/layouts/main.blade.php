@php
    define('SITE_VERSION', 1);
    function asset_v(){
        return '?v='.SITE_VERSION;
    }
@endphp
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css').asset_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css').asset_v() }}">

    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css').asset_v() }}">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @yield('header')

</head>

<body>
    <main>
        <div class="container-fluid flex-grow-1 d-flex flex-column flex-sm-row">
            <div class="row flex-grow-sm-1 flex-grow-0 w-100">
                @include('admin.layouts.includes.aside')

                <div class="col col-lg-10 h-100 p-4">
                    @yield('body')
                </div>
            </div>
        </div>
    </main>

    <div id="snackbar_container">
        <div class="side cont-left"></div>
        <div class="side cont-center"></div>
        <div class="side cont-right"></div>
    </div>

    <div id="toast_msg" class="toast align-items-center text-white bg_color-green_main border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="2000" data-bs-autoHide="true">
        <div class="d-flex">
            <div class="toast-body text-center">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    @include('admin.layouts.includes.footer')

    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text text-center">2020 All Rights Reserved. Design by</p>
        </div>
    </div>

    <!-- CDN SLICE -->
    <script src="{{ asset('vendor/jquery/jquery.min.js').asset_v() }}"></script>

    {{-- JS BOOTSTRAP 5.3 --}}
    <script src="{{ asset('vendor/bs/js/bootstrap.min.js').asset_v() }}"></script>
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js').asset_v() }}"></script>

    <script>
        jQuery(() => {
            // show_toast('mensaje que va en el toast');
        });
    </script>

    @yield('footer')
</body>

</html>
