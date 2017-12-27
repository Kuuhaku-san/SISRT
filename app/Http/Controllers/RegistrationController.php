<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $usuarios = User::all();

        return view('registration.index', compact('usuarios'));
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'dni' => 'required|max:8',
            'email' => 'required',
            'password' => 'required|confirmed',
            'apellido_p' => 'required',
            'apellido_m' => 'required',
            'nombres' => 'required',
            'tipo' => 'required'
        ]);

        $user = User::create([
            'dni' => request('dni'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'apellido_p' => request('apellido_p'),
            'apellido_m' => request('apellido_m'),
            'nombres' => request('nombres'),
            'tipo' => request('tipo'),
            'habilitado' => true
        ]);

        return redirect('/users');
    }
}
