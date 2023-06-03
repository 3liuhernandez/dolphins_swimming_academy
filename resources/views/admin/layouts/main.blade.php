<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= app_name() ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('imgs/logo_fondo.jpg') }}" type="image/x-icon">

    <!-- MY STYLES ADMIN -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/main.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/navbar.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/asside.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/dashboard.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/students.css') . site_v() }}">

    <!-- JQUERY STYLES PROGRESS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/jquery_blockui/nprogress.css') . site_v() }}">

    <!-- DATATABLES STYLES ADMIN -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/dataTables/css/dataTables.bootstrap5.min.css') . site_v() }} }}">

    <!-- BOOTSTRAP STYLES 5.3 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bs/css/bootstrap.min.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- STYLE INPUT STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/inputTel/css/inputTel.css') . site_v() }}">

    <!-- SWEETALERT2 STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') . site_v() }}">

    @yield('header')

</head>

<body>

    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-bell">
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
                <div class="cssload-circle">
                    <div class="cssload-inner"></div>
                </div>
            </div>
        </div>
    </div>

    <main class="fade">
        <div class="wrapper container-fluid flex-grow-1 d-flex flex-column flex-sm-row p-0">
            <div class="row flex-grow-sm-1 flex-grow-0 m-0 w-100">
                <div class="col-12 col-xl-2 p-0 content-aside">
                    @include('admin.layouts.includes.aside')
                </div>

                <div class="col-12 col-xl-10 p-0 content-body">
                    @include('admin.layouts.includes.navbar')
                    @yield('body')
                    @include('admin.layouts.includes.footer')
                </div>
            </div>
        </div>
    </main>

    {{-- JQUERY --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') . site_v() }}"></script>
    <script src="{{ asset('vendor/jquery_blockui/jquery.blockUI.js') . site_v() }}"></script>
    <script src="{{ asset('vendor/jquery_blockui/nprogress.min.js') . site_v() }}"></script>

    {{-- DATATABLES --}}
    <script src="{{ asset('vendor/dataTables/js/dataTables.min.js') . site_v() }}"></script>

    {{-- JS INPUT --}}
    <script src="{{ asset('vendor/inputTel/js/inputTel.min.js') . site_v() }}"></script>
    <script src="{{ asset('vendor/inputTel/js/inputUtils.js') . site_v() }}"></script>

    {{-- MY SCRIPS --}}
    <script src="{{ asset('admin/js/admin.js') . site_v() }}"></script>

    {{-- JS BOOTSTRAP 5.3 --}}
    <script src="{{ asset('vendor/bs/js/bootstrap.bundle.min.js') . site_v() }}"></script>

    @yield('footer')

    <script>
        jQuery( () => {
            setTimeout(() => {
                $('body main').removeClass('fade');
            }, 300);
        });
    </script>

</body>

</html>
