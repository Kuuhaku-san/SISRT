@extends('layouts.master')

@section('titulo')
    Modificar servicio
@endsection

@section('contenido')
    <h1>Servicio N° {{ $servicio->id }}</h1>
    <form action="/servicios/{{ $servicio->id }}" method="post">
        {{ csrf_field() }}

        <h4>Proforma</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="codigo">Código</label>
            <input class="col form-control" type="text" id="codigo" name="codigo" readonly value="{{ $servicio->proforma->codigo }}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" value="{{ $servicio->proforma->fecha }}" readonly>
        </div>

        <h4>Cliente</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" value="{{ $servicio->proforma->cliente->ruc }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" value="{{ $servicio->proforma->cliente->razon_social }}" readonly>
        </div>
        <div class="form-check">
            <label for="terminado" class="form-check-label">
                <input type="checkbox" name="terminado" value="1" class="form-check-input" checked="{{$servicio->terminado}}">
                Servicio terminado
            </label>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_servicios');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
