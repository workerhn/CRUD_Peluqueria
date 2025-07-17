@extends('layouts.app')

@section('title', 'Nuevo Servicio')

@section('content')
    <h1>Agregar Servicio</h1>
    <form action="{{ route('servicios.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Precio (L):</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Duración (minutos):</label>
            <input type="number" name="duracion" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('servicios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
