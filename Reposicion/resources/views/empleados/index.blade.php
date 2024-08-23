<h1>Lista de Empleados</h1>
<a href="{{ route('empleados.create') }}">Crear Nuevo Empleado</a>

<table>
    <tr>
        <th>ID Préstamo</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Fecha de Ingreso</th>
        <th>Salario</th>
    </tr>
    @foreach($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->fechaIngreso }}</td>
            <td>{{ $empleado->salario }}</td>
        </tr>
    @endforeach
</table>
