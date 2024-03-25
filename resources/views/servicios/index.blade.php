<h1>Listado de Servicios</h1>
<a href="{{ route('servicios.create') }}">Crear Nuevo Servicio</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Duración</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($servicios as $servicio)
        <tr>
            <td>{{ $servicio->id }}</td>
            <td>{{ $servicio->tip_serv }}</td>
            <td>{{ $servicio->descripcion_serv }}</td>
            <td>{{ $servicio->precio_serv }}</td>
            <td>{{ $servicio->duracion_serv }}</td>
            <td>
                <a href="{{ route('servicios.edit', $servicio->id) }}">Editar</a>
                <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
