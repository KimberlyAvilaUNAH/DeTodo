<h1>Lista de Proveedores</h1>
<a href="{{ route('proveedores.create') }}">Crear Nuevo Proveedor</a>

<table>
    <tr>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Fecha de Registro</th>
        <th>Teléfono</th>
        <th>Correo</th>
    </tr>
    @foreach($proveedores as $proveedor)
        <tr>
            <td>{{ $proveedor->id }}</td>
            <td>{{ $proveedor->nombre }}</td>
            <td>{{ $proveedor->fechaRegistro }}</td>
            <td>{{ $proveedor->telefono }}</td>
            <td>{{ $proveedor->correo }}</td>
        </tr>
    @endforeach
</table>
