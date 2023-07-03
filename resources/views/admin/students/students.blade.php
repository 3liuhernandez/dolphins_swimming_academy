@extends('admin.layouts.main')

@section('body')
    <section id="students">
        <div class="container-fluid">
            <div class="row m-0">

                <div class="col-12">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#student_register_tab" type="button" role="tab" aria-controls="student_register_tab"
                                aria-selected="true">Registro</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#students_list_tab" type="button" role="tab"
                                aria-controls="students_list_tab" aria-selected="false">Listado</button>
                        </li>
                    </ul>
                    <br>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="student_register_tab" role="tabpanel" aria-labelledby="home-tab"
                            tabindex="0">

                            <div class="card">
                                <div class="card-header p-3 d-flex justify-content-between align-items-center">
                                    <div class="title-card">
                                        <i class="bi bi-table"></i>
                                        <b>Registro</b>
                                    </div>
                                </div>

                                <div class="card-body">
                                    @include('admin.students.includes.__form_register')
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="students_list_tab" role="tabpanel" aria-labelledby="profile-tab"
                            tabindex="0">
                            <div class="card">
                                <div class="card-header p-3 d-flex justify-content-between align-items-center">
                                    <div class="title-card">
                                        <i class="bi bi-table"></i>
                                        <b>Listado</b>
                                    </div>
                                </div>
                                <div class="card-body p-0 p-md-3 table-responsive-md">
                                    @include('admin.students.includes.__list_table')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                            tabindex="0">...</div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab"
                            tabindex="0">...</div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @yield('foot')

    <script>
        const STUDENT_REGISTER_URL = `{{ route('students.store') }}`;
    </script>

    <script src="{{ asset('admin/js/students.js') . site_v() }}"></script>
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
