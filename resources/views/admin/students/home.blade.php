@extends('admin.layouts.main')

@section('header')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/students/students.css').site_v() }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css').site_v() }}">
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js').site_v() }}"></script>

    @yield('head')
@endsection

@section('body')
    <div class="bg-light border p-4">
        <h1>students</h1>
    </div>

    <div class="bg-light border p-4">
        <ul class="nav">
            <li class="btn btn-primary" onclick="$('#asside_student_register').addClass('open')">Registrar</li>
        </ul>
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
                                <td>{{$student->code}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->last_name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->parent_id}}</td>
                                <td>{{$student->status}}</td>
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

    <script src="{{ asset('js/master.js').site_v() }}"></script>
    <script src="{{ asset('js/students/students.js').site_v() }}"></script>

    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
            })
    </script>

    @include('admin.students.form_register')

@endsection