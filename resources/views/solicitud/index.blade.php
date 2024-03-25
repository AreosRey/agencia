{{-- resources/views/solicitudes/index.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Solicitudes</h1>
    <a href="{{ route('solicitudes.create') }}" class="btn btn-primary">Crear Solicitud</a>
    @foreach ($solicitudes as $solicitud)
        <div>
            <p>{{ $solicitud->fecha_solicitud }} - {{ $solicitud->ubicacion_servicio }}</p>
            <a href="{{ route('solicitudes.show', $solicitud) }}">Ver</a>
            <a href="{{ route('solicitudes.edit', $solicitud) }}">Editar</a>
            <form action="{{ route('solicitudes.destroy', $solicitud) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
