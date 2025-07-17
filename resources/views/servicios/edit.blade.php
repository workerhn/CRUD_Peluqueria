@extends('layouts.app')

@section('title', 'Editar Servicio')

@section('content')
    <h1>Editar Servicio</h1>
    <form action="{{ route('servicios.update', $servicio) }}" method="POST">
        @csrf @method('PUT')

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $servicio->nombre }}" required>
        </div>

        <div class="mb-3">
            <label>Precio (L):</label>
            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $servicio->precio }}" required>
        </div>

        <div class="mb-3">
            <label>Duración (minutos):</label>
            <input type="number" name="duracion" class="form-control" value="{{ $servicio->duracion }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
