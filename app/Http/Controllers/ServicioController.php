<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proforma;
use App\Servicio;

class ServicioController extends Controller
{
    public function index()
    {
        return view('servicios.index');
    }

    public function create(Proforma $proforma)
    {
        return view('servicios.create', compact('proforma'));
    }

    public function store(Proforma $proforma)
    {
        $this->validate(request(), [

        ]);

        $proforma->servicio()->create([
            'terminado' => request('terminado')
        ]);
        return view('servicios.index');
    }
}
