<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= app_name() ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('imgs/logo_fondo.jpg')}}" type="image/x-icon">

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css').site_v() }}">

    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css').site_v() }}">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @yield('header')

</head>

<body>

    <header class="bg-light"></header>

    <main class="py-5">
        @yield('body')
    </main>

    <div id="toast_msg" class="toast align-items-center text-white bg_color-green_main border-0" role="alert" aria-live="assertive" aria-atomic="true" data-bs-animation="true" data-bs-delay="2000" data-bs-autoHide="true">
        <div class="d-flex">
            <div class="toast-body text-center">
                Hello, world! This is a toast message.
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text text-center">2020 All Rights Reserved. Design by</p>
        </div>
    </div>

    <!-- CDN SLICE -->
    <script src="{{ asset('vendor/jquery/jquery.min.js').site_v() }}"></script>
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js').site_v() }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js').site_v() }}"></script>

    <script src="{{ asset('vendor/toast/toast.js').site_v() }}"></script>

    <script src="{{ asset('vendor/axios/axios.min.js').site_v() }}"></script>

    <script>
        jQuery(() => {
            // show_toast('mensaje que va en el toast');
        });
    </script>

    @yield('footer')
</body>

</html>
