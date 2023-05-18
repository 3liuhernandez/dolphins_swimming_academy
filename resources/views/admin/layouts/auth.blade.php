<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= app_name() ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('imgs/images_icons/manager_medium.png') }}" type="image/x-icon">

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/auth.css') . site_v() }}">

    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css') . site_v() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- SWEETALERT2 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') . site_v() }}">
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.min.js') . site_v() }}"></script>
    
    @yield('header')

</head>

<body>

    <main>
        @yield('body')
    </main>

    {{-- Jquery --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') . site_v() }}"></script>

    @yield('footer')
</body>

</html>
