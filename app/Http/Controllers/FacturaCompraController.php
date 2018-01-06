<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacturaCompra;
use App\Servicio;
use App\Proveedor;

class FacturaCompraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $compras = FacturaCompra::all();

        return view('compras.index', compact('compras'));
    }

    public function show(FacturaCompra $compra)
    {
        return view('compras.show', compact('compra'));
    }

    public function create(Servicio $servicio)
    {
        return view('compras.create', compact('servicio'));
    }

    public function store(Servicio $servicio)
    {
        $this->validate(request(), [
            'ruc_p' => 'required|max:11',
            'fecha' => 'date|required'
        ]);

        if ($proveedor = Proveedor::find(request('ruc_p'))) {
            $proveedor->razon_social = request('razon_social');
            $proveedor->direccion = request('direccion');
            $proveedor->telefono = request('telefono');
            $proveedor->numero_cuenta = request('numero_cuenta');
            $proveedor->rubro = request('rubro');
            $proveedor->save();
        }
        else {
            Proveedor::create([
                'ruc' => request('ruc_p'),
                'razon_social' => request('razon_social'),
                'direccion' => request('direccion'),
                'telefono' => request('direccion'),
                'numero_cuenta' => request('numero_cuenta'),
                'rubro' => request('rubro'),
            ]);
        }

        $servicio->factura_compra()->create([
            'ruc_p' => request('ruc_p'),
            'fecha' => request('fecha')
        ]);

        return redirect('compras');
    }

    public function destroy(FacturaCompra $compra)
    {
        $compra->eliminado = true;
        $compra->save();

        return redirect()->back();
    }
}
