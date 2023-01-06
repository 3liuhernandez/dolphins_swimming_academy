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
            <div class="row m-0 py-5 my-3 d-flex justify-content-center align-items-center">
                <!--  -->
                <div class="col-md-6 col-xl-4 col-sm-12 p-3 shadow-sm border border-success border-end-0 rounded-2" style="--bs-border-opacity: 0.2;">

                    <div class="text-center">
                        <h3 class="color-green_main">Iniciar Sesión</h3>
                    </div>
                    <!-- CONTAINER FORM -->
                    <form action="{{ route('login.validate') }}" method="POST">
                        @csrf
                        <div class="p-2 p-lg-4">
                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-green_main"><i class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="example@email.com" name="email" required autocomplete="email" autofocus value="{{ old('email') }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-green_main"><i class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" placeholder="password" name="pass" required autocomplete="pass" value="{{ old('pass') }}">
                            </div>

                            <button class="btn w-100 mt-2 text-white fw-semibold bg_color-green_main"type="submit"> Login </button>

                            <p class="text-center m-0"><a class="color-green_main" href="#">¿Olvidaste tucontraseña?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
