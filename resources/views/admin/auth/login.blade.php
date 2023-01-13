@extends('admin.layouts.auth')


@section('body')
    <section id="inicio_seccion">
        <div class="container">
            <div class="row m-0 d-flex justify-content-center align-items-center" style="height: 80vh">
                <!--  -->
                <div class="p-3 shadow-sm border rounded-2" style="width: 420px;">
                        <h3 class="text_color-blue-main display-5 text-center fw-semibold">Administración</h3>
                    <form action="{{ route('admin.login.validate') }}" method="POST">
                        @csrf
                        <div class="p-2 p-lg-4">
                            
                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-person-plus-fill text-white"></i></span>
                                <input type="text" class="form-control" placeholder="Username" name="username" required autocomplete="username" autofocus value="{{ old('username') }}">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text bg_color-blue-derivate"><i class="bi bi-key-fill text-white"></i></span>
                                <input type="password" class="form-control" placeholder="password" name="pass" required value="{{ old('pass') }}">
                            </div>

                            <button class="btn w-100 mt-2 text-white fw-semibold bg_color-blue-derivate"type="submit">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection