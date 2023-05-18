@extends('admin.layouts.auth')

@section('body')
    <section id="login">
        <div class="row m-0">
            <div class="content-img col-md-8 d-none d-md-block">
                <!-- content img -->
                <div class="content">
                    <img src="{{ asset('imgs/login-illustration.png') }}" class="" alt="">
                </div>
            </div>

            <div class="content-form col-10 col-sm-10 col-md-4 col-lg-4">
                @isset($msg_login)
                    <script>
                        Swal.fire({
                            confirmButtonText: 'Volver',
                            icon: 'error',
                            title: "{{ $msg_login }}",
                            text: "Usuario y/o contraseña no existe",
                            imageUrl: "../../../img/oopsface.png",
                            imageSize: '600x600'
                        });
                    </script>
                @endisset
                <div class="card">
                    <div class="card-header">
                        <h2 class="display-3">Area de <br> Administración</h2>
                    </div>
                    <div class="card-body">
                        <div class="content">
                            <form action="{{ route('admin.login.validate') }}" autocomplete="off" method="POST">
                                @csrf
                                <div class="group mb-3 position-relative">
                                    <input type="text" class="form-control floating-input" name="username" required autofocus value="{{ old('username') }}" placeholder=" ">
                                    <label class="form-label floating-label">Username</label>
                                </div>
                                <div class="group mb-3 position-relative">
                                    <input type="password" class="form-control floating-input" name="pass" required value="{{ old('pass') }}" placeholder=" ">
                                    <label class="form-label floating-label">Password</label>
                                </div>
                                <div class="group">
                                    <button class="btn btn-secondary"type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bg-white card-footer text-muted">
                        <div class="mt-2 mb-4">
                            <a class="nav-link" href="#">
                                ¿Has olvidado tu contraseña?
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
