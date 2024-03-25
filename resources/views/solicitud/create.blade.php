{{-- resources/views/solicitudes/create.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Solicitud</h1>
    @include('solicitudes.form', ['solicitud' => new \App\Models\Solicitud])
</div>
@endsection
