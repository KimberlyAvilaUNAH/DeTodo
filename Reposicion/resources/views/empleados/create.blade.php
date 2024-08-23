<h1>Crear Empleado</h1>

<form action="{{ route('empleados.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <label>Apellido:</label>
    <input type="text" name="apellido" required>
    <label>Fecha de Ingreso:</label>
    <input type="date" name="fechaIngreso" required>
    <label>Salario:</label>
    <input type="number" name="salario" step="0.01" required>
    <button type="submit">Guardar</button>
</form>
