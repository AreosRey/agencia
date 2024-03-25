@if ($solicitud->exists)
    <form action="{{ route('solicitudes.update', $solicitud) }}" method="POST">
    @method('PUT')
@else
    <form action="{{ route('solicitudes.store') }}" method="POST">
@endif
    @csrf

    <div class="form-group">
        <label for="fecha_solicitud">Fecha de Solicitud</label>
        <input type="date" class="form-control" id="fecha_solicitud" name="fecha_solicitud" value="{{ $solicitud->fecha_solicitud ?? old('fecha_solicitud') }}" required>
    </div>

    <div class="form-group">
        <label for="ubicacion_servicio">Ubicación del Servicio</label>
        <input type="text" class="form-control" id="ubicacion_servicio" name="ubicacion_servicio" value="{{ $solicitud->ubicacion_servicio ?? old('ubicacion_servicio') }}" required>
    </div>

    <!-- Agrega aquí más campos según sea necesario -->

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
