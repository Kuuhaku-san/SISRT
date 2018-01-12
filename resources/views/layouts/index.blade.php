@extends('layouts.master')

@section('contenido')
    <h1>@yield('titulo')</h1>

    @yield('opciones')

    <table class="table table-hover">
        <thead class="thead-light">
            @yield('cabeceras')
            <th scope="col">Acciones</th>
        </thead>
        <tbody>
            @yield('cuerpo')
        </tbody>
    </table>
@endsection
