@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="mb-4 dashboard-title">Bienvenido al Panel de Administración</h1>
       

        <div class="row">
        <!-- Total de clientes -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Total de Clientes</h5>
                    <p class="card-text display-6">{{ $totalClientes }}</p>
                </div>
            </div>
        </div>
   <!-- Puedes agregar más tarjetas aquí luego -->
    </div>

    <hr>

    <div class="text-center">
        <p class="lead">Gestiona clientes, citas, servicios y empleados desde el menú superior.</p>
    </div>

        <div class="row justify-content-center">
            <div class="col-md-3 mb-3">
                <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary w-100 dashboard-btn">📋 Clientes</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('citas.index') }}" class="btn btn-outline-success w-100 dashboard-btn">📅 Citas</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('servicios.index') }}" class="btn btn-outline-warning w-100 dashboard-btn">✂️ Servicios</a>
            </div>
            <div class="col-md-3 mb-3">
                <a href="{{ route('empleados.index') }}" class="btn btn-outline-info w-100 dashboard-btn">👨‍🔧 Empleados</a>
            </div>
        </div>
    </div>
@endsection
