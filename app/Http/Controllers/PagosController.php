<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacturaCompra;
use App\FacturaServicio;

class PagosController extends Controller
{
    public function index()
    {
        // TODO: Calcular

        return view('pagos.index');
    }
}
