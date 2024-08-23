<h1>Crear Proveedor</h1>

<form action="{{ route('proveedores.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required>
    <label>Fecha de Registro:</label>
    <input type="date" name="fechaRegistro" required>
    <label>Teléfono:</label>
    <input type="text" name="telefono" required>
    <label>Correo:</label>
    <input type="email" name="correo" required>
    <button type="submit">Guardar</button>
</form>
