@extends('layouts.auth')

@section('body')
    <main>
        <section id="formulario_registro">
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
        </section>
    </main>
@endsection
