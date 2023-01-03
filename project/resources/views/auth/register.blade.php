@extends('layouts.auth')

@section('body')
<main>
    <section id="formulario_registro">
        <div class="container">
            <div class="row m-0 py-5 my-3 d-flex justify-content-center align-items-center">
                <!--  -->
                <div class="col-md-8 col-xl-4 col-sm-12 shadow-sm border border-success border-end-0 rounded-2 p-3" style="--bs-border-opacity: .2;">

                    @if (session('msg_register'))
                        <div class="row">
                            <div class="alert {{ session('msg_type') === 'success' ? 'alert-success' : 'alert-danger' }} text-center">
                                <strong>{{ session('msg_register') }}</strong>
                            </div>
                        </div>
                    @endif

                    <div class="text-center">
                        <h3 class="color-green_main">Crear Cuenta</h3>
                    </div>
                    <!-- CONTAINER FORM -->
                    <div class="p-2 p-lg-4">
                        <form action="{{route('register.store')}}" method="POST">
                            @csrf

                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-green_main"><i class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre de Usuario" required autofocus autocomplete="name" value="{{ old('name') }}"
                                >
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-green_main"><i class="bi bi-envelope text-white"></i></span>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electronico" required autofocus autocomplete="email" value="{{ old('email') }}"
                                >
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-green_main"><i class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Clave" required autofocus autocomplete="pass" value="{{ old('pass') }}"
                                >
                            </div>

                            <div class="d-grid col-12 mx-auto">
                                <button class="btn text-white fw-semibold bg_color-green_main" type="submit"><span></span>Inscribirse</button>
                            </div>

                            <p class="text-center mt-3">¿Ya tienes una cuenta? &nbsp;
                                <span class=""><a class="color-green_main" href="{{route('login')}}">Iniciar Sesión</a></span>
                            </p>
                        </form>
                    </div>
                </div>
                <!--  -->
                <div class="col-md-4 d-none d-xl-block shadow-sm border border-success border-start-0 rounded-2 p-5" style="--bs-border-opacity: .2;">
                    <img src="{{asset('imgs/auth/img-registro.jpg')}}" class="d-block img-fluid rounded-2" style="height: 282px;" alt="image" title="Todo lo encuentas en nustra tienda Online">
                </div>

            </div>
        </div>
    </section>
</main>
@endsection