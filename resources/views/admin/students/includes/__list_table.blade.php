<table class="table p-3 table-bordered w-100 table-sm table-hover table-borderless" id="dataTableStudents">
    <thead>
        <tr>
            <th>Documento</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
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
                <td>{{ $student->document }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>{{ $student->parent_id ?? '-' }}</td>
                <td>{{ $student->status_title }}</td>
                <td>
                    <button class="btn btn-warning" role="button"> Editar </button>
                    <button class="btn btn-danger" role="button"> Eliminar </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
