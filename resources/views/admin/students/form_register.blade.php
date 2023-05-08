{{-- 
    /* AFORMULARIO DE REGISTRO ALUMNOS */
--}}

<div id="container_student_register" class="row m-0">
    <div class="card p-0 border-3 border-dark" style="padding: 0">
        <div class="w-100 text-center mb-4 pt-2 pb-1 bg-dark bg-gradient text-white">
            <h5>Datos del alumno</h5>
        </div>
        <div class="card-body">
            <form action="#" class="form needs-validation" id="form_student_register">
                @csrf
                {{-- NOMBRE Y APELLIDO & EDAD --}}
                <div class="row m-0 mb-3">
                    <div class="col-12 col-md-5 d-flex mb-3 align-content-center flex-wrap justify-content-between align-items-center">
                        <label class="me-3 me-md-0" for="name">Nombre</label>
                        <input id="name" name="name" type="text" minlength="3" class="form-control form-control-md field my-1 @error('name') is-invalid @enderror" placeholder="Nombre del estudiante" required autofocus autocomplete="on" value="{{ old('name') }}">
                    </div>
                    <div class="col-12 col-md-5 d-flex mb-3 align-content-center flex-wrap justify-content-between align-items-center">
                        <label class="me-3 me-md-0" for="last_name">Apellido</label>
                        <input id="last_name" name="last_name" type="text" minlength="3" class="form-control form-control-md field my-1 @error('last_name') is-invalid @enderror" placeholder="Apellido del estudiante" required autofocus autocomplete="on" value="{{ old('last_name') }}">
                    </div>
                    <div class="col col-md-2 d-flex mb-3 align-content-center flex-wrap justify-content-between align-items-center px-md-0">
                        <label class="me-3 me-md-0 d-flex align-content-between" for="age">Edad<i class="bi bi-info-square-fill text-primary ms-1 ms-md-3" data-toggle="tooltip" data-placement="top" title="Si es < 18. Debe adjuntar al representate"></i></label>
                        <input id="age" name="age" type="number" class="form-control form-control-md field my-1 @error('age') is-invalid @enderror" placeholder="Ej: 15" required autofocus autocomplete="on" value="{{ old('age') }}">
                    </div>
                </div>
                
                {{-- TELEFONO Y CORREO --}}
                <div class="row m-0 mb-3 align-items-center justify-content-evenly">
                    <div class="col-12 col-md-7 mb-3 form-group" style="width: fit-content;">
                        {{-- <label class="me-3 me-md-0 mb-2 mb-mb-0" for="email">Telefono</label> --}}
                        <input id="phone" name="phone" type="text" class="form-control form-control-md field my-2 @error('phone') is-invalid @enderror" autofocus autocomplete="on" value="{{ old('phone') }}">
                        <span id="valid-msg" class="hide">✓ Valido</span>
                        <span id="error-msg" class="hide"></span>
                    </div>

                    <div class="col-12 col-md-5 mb-3 form-group">
                        {{-- <label class="me-3 me-md-0 mb-2 mb-mb-0" for="email">Correo</label> --}}
                        <input id="email" name="email" type="text" class="form-control form-control-md field my-1 @error('email') is-invalid @enderror" placeholder="Correo del estudiante" required autofocus autocomplete="on" value="{{ old('email') }}">
                    </div>
                </div>
                
                {{-- TIPO DOCUMENTO Y DOCUMENTO --}}
                <div class="row m-0 mb-3">
                    <div class="col-12 col-md-4 mb-3">
                        <select class="form-select form-select-md field my-1" name="document_type" id="document_type">
                            <option value="" required aria-label="select">Tipo de documento</option>
                            @foreach ($document_types as $dt)
                                <option value="{{ $dt->code }}">{{ $dt->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <input id="document" name="document" type="text" class="form-control form-control-md field my-1 @error('document') is-invalid @enderror" placeholder="Documento del estudiante" required autofocus autocomplete="on" value="{{ old('document') }}">
                    </div>
                    <div class="col-12 col-md-4 mb-3 form-group">
                        <input id="birthdate" name="birthdate" type="date" class="form-control form-control-md field my-1 @error('birthdate') is-invalid @enderror" placeholder="dd/mm/yyyy" required autofocus autocomplete="on" value="{{ old('birthdate') }}">
                    </div>
                </div>

                {{-- INCLUDE FORM IF STUDENS < 18 --}}
                <div id="container_parents_form" class="d-none mt-5">
                    @include('admin.students.parents_form_register')
                </div>
                <div class="d-flex mt-4 justify-content-center">
                    <button role="button" class="w-50 btn btn-md btn-primary" id="submit_student_register">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
