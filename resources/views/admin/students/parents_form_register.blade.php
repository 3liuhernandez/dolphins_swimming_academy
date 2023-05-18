{{-- AFORMULARIO DE REGISTRO PADRES --}}

<div class="card p-0 border-3 border-dark">
    <div class="w-100 text-center mb-4 pt-2 pb-1 bg-dark bg-gradient text-white">
        <h5>Datos del representante</h5>
    </div>
    <div class="card-body">
        
        {{-- NOMBRE Y APELLIDO --}}
        <div class="row m-0 mb-3">
            <div class="-12 col-md-5 form-group mb-3">
                <input id="p_name" name="p_name" type="text" class="form-control my-1 form-control-md field field_parent @error('p_name') is-invalid @enderror" placeholder="Nombre" required autofocus value="{{ old('p_name') }}">
            </div>
            <div class="-12 col-md-5 form-group mb-3">
                <input id="p_last_name" name="p_last_name" type="text" class="form-control my-1 form-control-md field field_parent @error('p_last_name') is-invalid @enderror" placeholder="Apellido" required autofocus value="{{ old('p_last_name') }}">
            </div>
            <div class="col-12 col-md-2 form-group mb-3 px-md-0">
                <input id="p_age" name="p_age" type="number" class="form-control my-1 form-control-md field field_parent @error('p_age') is-invalid @enderror" placeholder="Ej: 15" required autofocus value="{{ old('p_age') }}">
            </div>
        </div>
        
        {{-- TIPO DOCUMENTO & DOCUMENTO --}}
        <div class="row m-0 mb-3">
            <div class="col-12 col-md-6 form-group mb-3">
                <select class="form-select field field_parent" name="p_document_type" id="p_document_type">
                    <option value="" selected>Seleccione</option>
                    @foreach ($document_types as $dt)
                        <option value="{{ $dt->code }}">{{ $dt->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-6 form-group mb-3">
                <div class="-12 col">
                    <input id="p_document" name="p_document" type="text" class="form-control my-1 form-control-md field field_parent @error('p_document') is-invalid @enderror" placeholder="Documento" required autofocus value="{{ old('p_document') }}">
                </div>
            </div>
        </div>

        {{-- TELEFONO Y CORREO --}}
        <div class="row m-0 mb-3">
            <div class="col-12 col-md-6 form-group mb-3">
                <input id="p_phone" name="p_phone" type="text" class="form-control my-1 form-control-md field field_parent @error('p_phone') is-invalid @enderror" placeholder="Tlf de contacto" required autofocus value="{{ old('p_phone') }}">
            </div>
            <div class="col-12 col-md-6 form-group mb-3">
                <input id="p_email" name="p_email" type="text" class="form-control my-1 form-control-md field field_parent @error('p_email') is-invalid @enderror" placeholder="Correo" required autofocus value="{{ old('p_email') }}">
            </div>
        </div>
    </div>
</div>
