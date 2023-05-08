@extends('admin.layouts.main')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/students/students.css') . site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') . site_v() }}">
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') . site_v() }}"></script>

    @yield('head')
@endsection

@section('body')
    <div class="bg-light border p-4">
        <h1>students</h1>
    </div>

    <div class="bg-light border p-4">
        <ul class="nav">
            {{-- onclick="$('#asside_student_register').addClass('open')" --}}
            <li class="btn btn-primary" id="add_student" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id2" aria-controls="Id2">Registrar</li>
        </ul>
    </div>

    <div class="offcanvas offcanvas-end" style="min-width:50%;max-width:100%" tabindex="-1" id="Id2" aria-labelledby="Formaulario de registro">
        <div class="offcanvas-header flex-row-reverse pb-0">
            <h5 class="offcanvas-title w-100 text-center me-5" id="Formaulario de registro">Formaulario de registro</h5>
        <button type="button" class="bi bi-arrow-right-square bg-transparent" style="padding:0;position:absolute;left:-50px;font-size:1.8rem;color:#fff;padding:0!important;display:flex;}" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @include('admin.students.form_register')
        </div>
    </div>

    <div class="bg-light border p-4">
        <div class="col-12">
            @isset($students)
                <table>
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Representante</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->code }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->last_name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>{{ $student->parent_id }}</td>
                                <td>{{ $student->status }}</td>
                                <td>
                                    <button class="btn btn-warning" role="button"> Editar </button>
                                    <button class="btn btn-danger" role="button"> Eliminar </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endisset
        </div>
    </div>

@endsection


@section('footer')
    @yield('foot')

    <script src="{{ asset('js/students/students.js') . site_v() }}"></script>

    {{-- <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
            })
    </script> --}}
@endsection
