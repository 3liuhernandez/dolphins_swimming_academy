@extends('layouts.auth')

@section('footer')
    @isset($msg_login)
        <script>
            jQuery(() => {
                snackbar('bg-danger', "{{ $msg_login }}", 'center');
            });
        </script>
    @endisset
@endsection

@section('body')
    <section id="inicio_seccion">
        <div class="container">
            <div class="row m-0">
                <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 bg-light mx-auto rounded-2 p-3">
                    <div class="text-center">
                        <h2 class="fs-1 text_color-blue-derivate">Iniciar Sesión</h2>
                    </div>
                    <hr>
                    <form action="{{ route('login.validate') }}" method="POST">
                        @csrf
                        <div class="input-group mb-2">
                            <span class="input-group-text bg_color-blue-derivate text-white">@</span>
                            <input type="text" class="form-control" placeholder="Usuario / Email" aria-label="Username">
                        </div>
                        <div class="input-group mb-4">
                            <span class="input-group-text bg_color-blue-derivate">
                                <i class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class="form-control" placeholder="password" name="pass" required value="{{ old('pass') }}">
                        </div>
                        <button type="submit" class="btn btn-md w-100 fw-semibold bg_color-blue-derivate text-white" href="#">Login</button>
                        <p class="text-center mt-4 mb-0">
                            <a class="text_color-blue-derivate" href="#">¿Olvidaste tucontraseña?</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
