<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'dni' => 'required',
            'password' => 'required'
        ]);

        if (! auth()->attempt(request(['dni', 'password'])) ) {
            return back()->withErrors([
                'message' => 'DNI o contraseña incorrecta.'
            ]);
        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('login');
    }
}
