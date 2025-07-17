@extends('layouts.app')

@section('title', 'Editar Empleado')

@section('content')
    <h1>Editar Empleado</h1>
    <form action="{{ route('empleados.update', $empleado) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $empleado->nombre }}" required>
        </div>
        <div class="mb-3">
            <label>Especialidad:</label>
            <input type="text" name="especialidad" class="form-control" value="{{ $empleado->especialidad }}">
        </div>
        <div class="mb-3">
            <label>Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $empleado->telefono }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
