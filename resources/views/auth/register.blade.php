@extends('layouts.auth')

@section('body')
    
    {{-- <section id="formulario_registro">
        <div class="container">
            <div class="row m-0 py-5 py-md-0 ">
                @if (session('msg_register'))
                    <div class="row">
                        <div class="alert {{ session('msg_type') === 'success' ? 'alert-success' : 'alert-danger' }} text-center">
                            <strong>{{ session('msg_register') }}</strong>
                        </div>
                    </div>
                @endif

                <div class="col-10 col-sm-8 col-md-6 col-lg-5 col-xl-4 col-xxl-3 bg-light mx-auto rounded-2 p-3">
                    <div class="text-center">
                        <h2 class="fs-1 text_color-blue-derivate">Crear cuenta</h2>
                    </div>
                    <hr>
                    
                    <form action="{{ route('register.store') }}" method="POST">
                        @csrf
                        <div class="input-group mb-2">
                            <span class="input-group-text bg_color-blue-derivate text-white">
                                <i class="bi bi-person-plus-fill"></i>
                            </span>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Usuario" required autocomplete="name" value="{{ old('name') }}">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text bg_color-blue-derivate text-white">
                                <i class="bi bi-envelope"></i>
                            </span>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Example@email.com" required autocomplete="email" value="{{ old('email') }}">
                        </div>
                        <div class="input-group mb-2">
                            <span class="input-group-text bg_color-blue-derivate text-white">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required value="{{ old('pass') }}">
                        </div>
                        <div class="d-grid col-12 mx-auto">
                            <button class="btn fw-semibold bg_color-blue-derivate text-white" type="submit">Registrarse</button>
                        </div>
                        <p class="d-flex flex-wrap justify-content-center mt-3 mb-0 text_color-blue-derivate">¿Ya tienes una cuenta? &nbsp;
                            <a class="text_color-blue-derivate" href="{{ route('login') }}">Iniciar Sesión</a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </section> --}}


    <section id="auth">
        <div class="container">
            <div class="row m-0 align-items-center text-center">
                <div class="col-12">
                    <div class="form-content">
                        <div class="card shadow border-0" style="width:380px">
                            <div class="card-body py-5 px-4">
                                <img src="asset/img/logo-dark.svg" alt="" class="img-fluid mb-4">
                                <h4 class="mb-3 fw-normal">Registro gratis</h4>
                                <form class="" action="#" method="POST">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </span>
                                        <input type="text" name="Uusername" class="form-control" autofocus placeholder="username" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"> </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                        </span>
                                        <input type="email" name="Uemail" class="form-control" placeholder="Email address" required>
                                    </div>
                                    <div class="input-group mb-4">
                                        <span class="input-group-text">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                        </span>
                                        <input type="password" name="Upassword" class="form-control" placeholder="Password" required>
                                    </div>
                                    <input type="submit" class="btn btn-primary px-5 my-4" name="login" value="Registrarme">
                                </form>
                                <p class="mb-0 text-muted d-flex justify-content-center">¿Ya tienes una cuenta? <a href="{{ route('login') }}" class="nav-link ms-2 text-primary">Iniciar sesión</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
