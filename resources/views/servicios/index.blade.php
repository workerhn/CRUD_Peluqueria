@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <h1>Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-primary mb-3">Nuevo Servicio</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Duración</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->nombre }}</td>
                    <td>L {{ number_format($servicio->precio, 2) }}</td>
                    <td>{{ $servicio->duracion }} min</td>
                    <td>
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este servicio?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
