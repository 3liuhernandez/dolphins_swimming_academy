<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#02adfc">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= app_name() ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{asset('imgs/logo_fondo.jpg')}}" type="image/x-icon">

    <!-- MY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/class.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css').site_v() }}">
    
    <!-- BOOTSTRAP 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css').site_v() }}">

    <!-- ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    @yield('header')

</head>

<body>

    <header class="sticky-top">
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

    @include('layouts.includes.footer')

    <script>
        var sonido = new Audio();
        sonido.src="http://www.sonidosmp3gratis.com/sounds/deslizar_1.mp3";
    </script>

    {{-- MY SCRIPT BTN UP --}}
    <script src="{{ asset('js/btn-float.js').site_v() }}"></script>

    {{-- JQUERY FRAMEWORK --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js').site_v() }}"></script>

    {{-- JS BOOTSTRAP 5.3 --}}
    <script src="{{ asset('vendor/bs/js/bootstrap.min.js').site_v() }}"></script>
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js').site_v() }}"></script>

    <script>
        jQuery(() => {
            // show_toast('mensaje que va en el toast');
        });
    </script>

    @yield('footer')
</body>

</html>
