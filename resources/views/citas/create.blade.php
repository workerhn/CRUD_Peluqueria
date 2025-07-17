@extends('layouts.app')

@section('title', 'Agendar Cita')

@section('content')
    <h1>Agendar Nueva Cita</h1>

    <form action="{{ route('citas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="cliente_id">Cliente:</label>
            <select name="cliente_id" class="form-select" required>
                <option value="">-- Selecciona --</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="servicio_id">Servicio:</label>
            <select name="servicio_id" class="form-select" required>
                <option value="">-- Selecciona --</option>
                @foreach ($servicios as $servicio)
                    <option value="{{ $servicio->id }}">{{ $servicio->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="fecha_hora">Fecha y Hora:</label>
            <input type="datetime-local" name="fecha_hora" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Agendar</button>
        <a href="{{ route('citas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
