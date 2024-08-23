<h1>Crear Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label>Descripción:</label>
    <input type="text" name="descripcion" required>
    <label>Precio:</label>
    <input type="number" name="precio" step="0.01" required>
    <label>Stock:</label>
    <input type="number" name="stock" required>
    <label>Paga ISV:</label>
    <input type="checkbox" name="pagaIsv" value="1">
    <button type="submit">Guardar</button>
</form>
