<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class DashboardController extends Controller
{
    
    public function index()
    {
        $totalClientes = \App\Models\Cliente::count();
        return view('dashboard', compact('totalClientes'));
    }
}
