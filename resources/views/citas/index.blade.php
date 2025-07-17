@extends('layouts.app')

@section('title', 'Lista de Citas')

@section('content')
    <h1>Citas</h1>
    <a href="{{ route('citas.create') }}" class="btn btn-primary mb-3">Agendar Cita</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Servicio</th>
                <th>Fecha y Hora</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($citas as $cita)
                <tr>
                    <td>{{ $cita->cliente->nombre }}</td>
                    <td>{{ $cita->servicio->nombre }}</td>
                    <td>{{ \Carbon\Carbon::parse($cita->fecha_hora)->format('d/m/Y H:i') }}</td>
                    <td>{{ ucfirst($cita->estado) }}</td>
                    <td>
                        <form action="{{ route('citas.destroy', $cita) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta cita?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
