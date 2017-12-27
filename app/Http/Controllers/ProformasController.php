<?php

namespace App\Http\Controllers;

use App\Proforma;

class ProformasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $proformas = Proforma::all();

        return view('proformas.index', compact('proformas'));
    }

    public function create()
    {
        return view('proformas.create');
    }

    public function show(Proforma $proforma)
    {
        return view('proformas.show', compact('proforma'));
    }

    public function store()
    {
        $this->validate(request(), [
            'codigo' => 'required',
            'fecha' => 'required|date',
            'mano_de_obra' => 'required',
        ]);

        Proforma::create([
            'codigo' => request('codigo'),
            'fecha' => request('fecha'),
            'mano_de_obra' => request('mano_de_obra'),
            'precio_mano_obra' => request('precio_mano_obra'),
            'ruc_c' => request('ruc_c'),
            'dni_u' => auth()->user()->dni
        ]);

        return redirect('/');
    }

}
