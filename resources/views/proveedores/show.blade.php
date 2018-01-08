@extends('layouts.master')

@section('titulo')
    Modificar Proveedor
@endsection

@section('contenido')
        <h2>Proveedor {{ $proveedor->ruc }}</h2>
        <hr>
        <div class="col-sm-8">

        <form method="POST" action="/proveedores/{{ $proveedor->ruc }}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-group">
                <label for="razon_social">Razón social:</label>
                <input type="text" class="form-control" id="razon_social" name="razon_social" required value="{{ $proveedor->razon_social }}">
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $proveedor->direccion }}">
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $proveedor->telefono }}">
            </div>

            <div class="form-group">
                <label for="numero_cuenta">Número de cuenta:</label>
                <input type="text" class="form-control" id="numero_cuenta" name="numero_cuenta" value="{{ $proveedor->numero_cuenta }}">
            </div>

            <div class="form-group">
                <label for="rubro">Rubro:</label>
                <input type="text" class="form-control" id="rubro" name="rubro" value="{{ $proveedor->rubro }}">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>

            @include('layouts.errors')
        </form>
        </div>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_proveedores');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
