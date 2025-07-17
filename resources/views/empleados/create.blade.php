@extends('layouts.app')

@section('title', 'Nuevo Empleado')

@section('content')
    <h1>Registrar Empleado</h1>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Especialidad:</label>
            <input type="text" name="especialidad" class="form-control">
        </div>
        <div class="mb-3">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
