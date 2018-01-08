<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacturaCompra;
use App\FacturaServicio;

class PagosController extends Controller
{
    public function index()
    {
        $mes = 12;
        $año = 2017;

        $monto_facturas = FacturaServicio::monto_total($año, $mes);
        $monto_compras = FacturaCompra::monto_total($año, $mes);

        $igv = 0.18 * ($monto_facturas - $monto_compras);
        $ir = 0.015 * $monto_facturas;

        return view('pagos.index', compact('igv', 'ir'));
    }
}
