@extends('layouts.master')

@section('contenido')
    <h1>@yield('titulo')</h1>

    <div class="row mb-3">
        <div class="col-sm-2">
            <a href=@yield('href_nuevo')>
                <button type="button" class="btn btn-success" name="nuevo">Nuevo</button>
            </a>
            @yield('opciones')
        </div>
        <div class="col-sm-10">
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar por código" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>

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
