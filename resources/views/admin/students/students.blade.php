@extends('admin.layouts.main')

@section('body')

    <section id="students">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-3 d-flex justify-content-between align-items-center">
                            <div class="title-card">
                                <i class="bi bi-table"></i>
                                <b>Registros de estudiantes</b>
                            </div>
                            <button class="btn btn-sm btn-primary" id="add_student" type="button" data-bs-toggle="offcanvas" data-bs-target="#Id2" aria-controls="Id2">Nuevo registro</button>
                            <div class="offcanvas offcanvas-end" style="box-shadow:-1px 0px 0px 2px #dddddd;min-width:50%;max-width:100%;border:0" tabindex="-1" id="Id2" aria-labelledby="Formaulario de registro">
                                <div class="offcanvas-header flex-row-reverse pb-0">
                                    <h5 class="offcanvas-title w-100 text-center me-5" id="Formaulario de registro"> Formaulario de registro</h5> 
                                    <button type="button" class="btn-close text-reset border" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    @include('admin.students.form_register')
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0 p-md-3 table-responsive-md">
                            <table class="table p-3 table-bordered w-100 table-sm table-hover table-borderless" id="dataTableStudents">
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
                                    @for ($i = 0; $i < 50; $i++)
                                    <tr>
                                        <td>14769220</td>
                                        <td>John</td>
                                        <td>Lennon</td>
                                        <td>Lennon.music@yahoo.com</td>
                                        <th>23445</th>
                                        <th>Alfred Lennon</th>
                                        <th>
                                            <div class="bg-success rounded-1 text-white text-center fw-normal">Activo</div>
                                        </th>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-sm btn-primary d-flex align-items-center me-1 me-md-2" href="#">
                                                    <span class="d-none d-md-block">Editar</span>
                                                    <i class="bi bi-pencil-square ms-md-2"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger d-flex align-items-center ms-1 ms-md-2" href="#">
                                                    <span class="d-none d-md-block">Eliminar</span>
                                                    <i class="bi bi-trash ms-md-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>14769220</td>
                                        <td>Elton</td>
                                        <td>John</td>
                                        <td>John.music@yahoo.com</td>
                                        <th>1998</th>
                                        <th>Stanley Dwight</th>
                                        <th>
                                            <div class="bg-danger rounded-1 text-white text-center fw-normal">Inactivo</div>
                                        </th>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a class="btn btn-sm btn-primary d-flex align-items-center me-1 me-md-2" href="#">
                                                    <span class="d-none d-md-block">Editar</span>
                                                    <i class="bi bi-pencil-square ms-md-2"></i>
                                                </a>
                                                <a class="btn btn-sm btn-danger d-flex align-items-center ms-1 ms-md-2" href="#">
                                                    <span class="d-none d-md-block">Eliminar</span>
                                                    <i class="bi bi-trash ms-md-2"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                
                {{-- <div class="col-12">
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
            </div> --}}
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @yield('foot')

    <script>
        const STUDENT_REGISTER_URL = `{{ route('students.store') }}`;
    </script>

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