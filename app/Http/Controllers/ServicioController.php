<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use App\Servicio;

class ServicioController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();

        return view('servicios.index', compact('servicios'));
    }

    public function show(Servicio $servicio)
    {
        return view('servicios.show', compact('servicio'));
    }

    public function create(Proforma $proforma)
    {
        return view('servicios.create', compact('proforma'));
    }

    public function store(Proforma $proforma)
    {
        $this->validate(request(), [

        ]);

        $terminado = null !== request('terminado');

        $proforma->servicio()->create([
            'terminado' => $terminado
        ]);

        return redirect('/servicios');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->eliminado = true;
        $servicio->save();

        return redirect()->back();
    }
}
