@extends('layouts.auth')

@section('footer')
    @isset($msg_login)
        <script>
            jQuery( () => {
                snackbar('bg-danger', "{{$msg_login}}", 'center');
            });
        </script>
    @endisset
@endsection

@section('body')
    <section id="inicio_seccion">
        <div class="container">
            <div class="row m-0 d-flex justify-content-center align-items-center">
                <div class="bg-light rounded-2 col-12 col-md-4 m-5 py-3 px-4">
                    <div class="text-center">
                        <h2 class="fs-1 text_color-blue-derivate">Iniciar Sesión</h2>
                    </div>
                    <hr>
                    <form action="{{ route('login.validate') }}" method="POST">
                        @csrf
                            <div class="input-group mb-2">
                                <span class="input-group-text bg_color-blue-main text-white">@</span>
                                <input type="text" class="form-control" placeholder="Usuario / Email" aria-label="Username">
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-text bg_color-blue-main">
                                    <i class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" placeholder="password" name="pass" required value="{{ old('pass') }}">
                            </div>
                            
                            <button type="submit" class="btn btn-md w-100 fw-semibold bg_color-blue-main text-white" href="#">Login</button>
                            <p class="text-center mt-4 mb-0">
                                <a class="text_color-blue-derivate" href="#">¿Olvidaste tucontraseña?</a>
                            </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection