@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
    <h1>Editar Cliente</h1>
    <form action="{{ route('clientes.update', $cliente) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $cliente->nombre }}" required>
        </div>
        <div class="mb-3">
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
        </div>
        <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" value="{{ $cliente->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
