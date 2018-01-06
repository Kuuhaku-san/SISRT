@extends('layouts.master')

@section('titulo')
    Ajustes de usuario
@endsection

@section('contenido')
    <h2>Ajustes de la cuenta</h2>
    <hr>
    <div class="col-6">
        <form action="/user/ajustes" method="post">
            {{ csrf_field() }}

            <div class="form-group row">
                <label class="col-md-5" for="dni">DNI</label>
                <input class="col form-control" type="text" name="dni" id="dni" value="{{Auth::user()->dni}}" readonly>
            </div>

            <div class="form-group row">
                <label class="col-md-5" for="nombre">Nombre</label>
                <input class="col form-control" type="text" name="nombre" id="nombre" value="{{Auth::user()->nombreCompleto()}}" readonly>
            </div>

            <div class="form-group row">
                <label class="col-md-5" for="email">Correo electrónico</label>
                <input class="col form-control" type="email" name="email" id="email" value="{{Auth::user()->email}}">
            </div>

            <div class="form-group row">
                <label class="col-md-5" for="password">Contraseña anterior</label>
                <input class="col form-control" type="password" name="password" id="password">
            </div>

            <div class="form-group row">
                <label class="col-md-5" for="new_password">Nueva contraseña</label>
                <input class="col form-control" type="password" name="new_password" id="new_password">
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit">Guardar</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_usuarios');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
