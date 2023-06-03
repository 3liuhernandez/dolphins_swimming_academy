<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= app_name() ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('imgs/favicon.ico') }}" type="image/x-icon">
    <!-- FONTAWESOME -->
    <script src="{{ asset('vendor/fontawesome/fontawesome.min.js') }}" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css').site_v() }}">
    
    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/user_login.css').site_v() }}">

    @yield('header')

</head>

<body>

    <header class="sticky-top bg-light">
        @include('layouts.includes.navbar')
    </header>

    <main>
        @yield('body')
    </main>

    @include('layouts.includes.footer')

    <!-- CDN SLICE -->
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js').site_v() }}"></script>
    <script src="{{ asset('vendor/popper/popper.min.js').site_v() }}"></script>

    @yield('footer')
</body>

</html>
