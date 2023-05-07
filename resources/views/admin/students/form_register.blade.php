<div id="container_student_register" class="row m-0">

    <div class="col-12 my-3">
        <h4>Formulario de Registro</h4>
    </div>

    <form action="#" class="" id="form_student_register">
        @csrf

        {{-- NOMBRE Y APELLIDO --}}
        <div class="row m-0 mb-3">
            <div class="col-md-6 form-group">

                <div class="row">
                    <div class="col-5">
                        <label for="document_type">Tipo de documento</label>
                        <select class="form-select field" name="document_type" id="document_type">
                            <option value="" selected>Seleccione</option>
                            @foreach ($document_types as $dt)
                                <option value="{{$dt->code}}">{{$dt->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <label for="document">Documento</label>
                        <input id="document" name="document" type="text"
                        class="form-control field @error('document') is-invalid @enderror" placeholder="Documento del estudiante"
                        required autofocus value="{{ old('document') }}">
                    </div>
                </div>

            </div>
            <div class="col-md-3 form-group mt-2 mt-md-0">
                <label for="birthdate">Fecha de Nacimiento</label>
                <input id="birthdate" name="birthdate" type="date"
                    class="form-control field @error('birthdate') is-invalid @enderror"
                    placeholder="Fecha de nacimiento" required autofocus value="{{ old('birthdate') }}">
            </div>
            <div class="col-md-3 form-group mt-2 mt-md-0">
                <label for="age">
                    Edad
                    <i
                        class="bi bi-info-square-fill text-primary"
                        data-toggle="tooltip"
                        data-placement="top"
                        title="Si es < 18. Debe adjuntar al representate"
                    ></i>
                </label>
                <input id="age" name="age" type="number"
                    class="form-control field @error('age') is-invalid @enderror" placeholder="Ej: 15" required
                    autofocus value="{{ old('age') }}">
            </div>
        </div>

        {{-- NOMBRE Y APELLIDO --}}
        <div class="row m-0 mb-3">
            <div class="col-md-6 form-group">
                <label for="name">Nombre</label>
                <input id="name" name="name" type="text"
                    class="form-control field @error('name') is-invalid @enderror"
                    placeholder="Nombre del estudiante" required autofocus value="{{ old('name') }}">
            </div>
            <div class="col-md-6 form-group mt-2 mt-md-0">
                <label for="last_name">Apellido</label>
                <input id="last_name" name="last_name" type="text"
                    class="form-control field @error('last_name') is-invalid @enderror"
                    placeholder="Apellido del estudiante" required autofocus value="{{ old('last_name') }}">
            </div>
        </div>

        {{-- TELEFONO Y CORREO --}}
        <div class="row m-0 mb-3">
            <div class="col-md-6 form-group">
                <label for="phone">Teléfono</label>
                <input id="phone" name="phone" type="text"
                    class="form-control field @error('phone') is-invalid @enderror" placeholder="Tlf de contacto"
                    required autofocus value="{{ old('phone') }}">
            </div>
            <div class="col-md-6 form-group mt-2 mt-md-0">
                <label for="email">Correo</label>
                <input id="email" name="email" type="text"
                    class="form-control field @error('email') is-invalid @enderror"
                    placeholder="Correo del estudiante" required autofocus value="{{ old('email') }}">
            </div>
        </div>

        <div id="container_parents_form" class="d-none my-5">
            @include('admin.students.parents_form_register')
        </div>

        <div class="row m-0 justify-content-center">
            <button role="button" class="w-25 btn btn-primary" id="submit_student_register">
                Registrar
            </button>
        </div>
    </form>
</div>
