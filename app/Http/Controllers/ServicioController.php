<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use App\Servicio;

class ServicioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
            'fecha' => 'required|date'
        ]);

        $proforma->servicio()->create([
            'estado' => request('estado'),
            'fecha' => request('fecha')
        ]);

        return redirect('/servicios');
    }

    public function update(Servicio $servicio)
    {
        $this->validate(request(), [
            'fecha' => 'required|date'
        ]);

        $servicio->fill([
            'estado' => request('estado'),
            'fecha' => request('fecha')
        ]);
        $servicio->save();

        return redirect('/servicios');
    }

    public function destroy(Servicio $servicio)
    {
        $servicio->eliminado = true;
        $servicio->save();

        return redirect()->back();
    }
}
