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
    {{-- <section id="inicio_seccion">
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
                            <input type="email" class="form-control" name="email" placeholder="Email">
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
    </section> --}}

    <section id="auth">
        <div class="container-fluid p-0">
            <div class="row m-0">
                
                <div class="col-8 d-none d-md-block p-0">
                    <div class="content-img">
                        <img src="{{ asset('imgs/bg/bg-auth.WebP') }}" class="img-fluid" alt="">
                    </div>
                </div>
                
                <div class="col-12 col-md-4">
                    <div class="form-content">
                        <div class="card shadow border-0" style="width:30rem">
                            <div class="card-body py-5 px-4">
                                {{-- <img src="asset/img/logo-dark.svg" alt="" class="img-fluid mb-4"> --}}
                                <h4 class="mb-3 fw-normal">Iniciar sesión</h4>
                                <form class="" action="../../app/models/" method="POST" autocomplete>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"> </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                        </span>
                                        <input type="email" name="Uemail" class="form-control" autofocus placeholder="Email address">
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                        </span>
                                        <input type="password" name="Upassword" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group text-left mt-2">
                                        <div class="form-check d-flex">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="checked" checked>
                                            <label class="form-check-label" for="checked"> Guardar credenciales</label>
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary px-5 my-4" name="login" value="Entrar">
                                </form>
                                <p class="mb-0 text-muted d-flex justify-content-center">¿No tienes una cuenta? <a href="{{ route('register') }}" class="nav-link ms-2 text-primary">Registrate</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
