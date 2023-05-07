
<div class="row">
    <h4>Parents Data</h4>
</div>

{{-- NOMBRE Y APELLIDO --}}
<div class="row m-0 mb-3">
    <div class="col-md-6 form-group">

        <div class="row">
            <div class="col-5">
                <label for="p_document_type">Tipo de documento</label>
                <select class="form-select field field_parent" name="p_document_type" id="p_document_type">
                    <option value="" selected>Seleccione</option>
                    @foreach ($document_types as $dt)
                        <option value="{{$dt->code}}">{{$dt->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="p_document">Documento</label>
                <input id="p_document" name="p_document" type="text"
                class="form-control field field_parent @error('p_document') is-invalid @enderror" placeholder="Documento"
                required autofocus value="{{ old('p_document') }}">
            </div>
        </div>

    </div>
    
    <div class="col-md-3 form-group mt-2 mt-md-0">
        <label for="p_age">
            Edad
        </label>
        <input id="p_age" name="p_age" type="number"
            class="form-control field field_parent @error('p_age') is-invalid @enderror" placeholder="Ej: 15" required
            autofocus value="{{ old('p_age') }}">
    </div>
</div>

{{-- NOMBRE Y APELLIDO --}}
<div class="row m-0 mb-3">
    <div class="col-md-6 form-group">
        <label for="p_name">Nombre</label>
        <input id="p_name" name="p_name" type="text"
            class="form-control field field_parent @error('p_name') is-invalid @enderror"
            placeholder="Nombre" required autofocus value="{{ old('p_name') }}">
    </div>
    <div class="col-md-6 form-group mt-2 mt-md-0">
        <label for="p_last_name">Apellido</label>
        <input id="p_last_name" name="p_last_name" type="text"
            class="form-control field field_parent @error('p_last_name') is-invalid @enderror"
            placeholder="Apellido" required autofocus value="{{ old('p_last_name') }}">
    </div>
</div>

{{-- TELEFONO Y CORREO --}}
<div class="row m-0 mb-3">
    <div class="col-md-6 form-group">
        <label for="p_phone">Teléfono</label>
        <input id="p_phone" name="p_phone" type="text"
            class="form-control field field_parent @error('p_phone') is-invalid @enderror" placeholder="Tlf de contacto"
            required autofocus value="{{ old('p_phone') }}">
    </div>
    <div class="col-md-6 form-group mt-2 mt-md-0">
        <label for="p_email">Correo</label>
        <input id="p_email" name="p_email" type="text"
            class="form-control field field_parent @error('p_email') is-invalid @enderror"
            placeholder="Correo" required autofocus value="{{ old('p_email') }}">
    </div>
</div>