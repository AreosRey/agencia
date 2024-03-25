<h1>Editar Servicio</h1>
<form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="tip_serv">Tipo de Servicio:</label>
    <input type="text" name="tip_serv" id="tip_serv" value="{{ $servicio->tip_serv }}">
    <label for="descripcion_serv">Descripción:</label>
    <input type="text" name="descripcion_serv" id="descripcion_serv" value="{{ $servicio->descripcion_serv }}">
    <label for="precio_serv">Precio:</label>
    <input type="text" name="precio_serv" id="precio_serv" value="{{ $servicio->precio_serv }}">
    <label for="duracion_serv">Duración:</label>
    <input type="text" name="duracion_serv" id="duracion_serv" value="{{ $servicio->duracion_serv }}">
    <button type="submit">Guardar Cambios</button>
</form>
