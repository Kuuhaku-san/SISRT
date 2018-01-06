@extends('layouts.master')

@section('titulo')
    Modificar factura de servicio
@endsection

@section('contenido')
    <h2>Factura de servicio N° {{ $factura->id }}</h2>
    <hr>

    <form action="/facturas/{{ $factura->id }}" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" required value="{{ $factura->fecha }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="user">Emitido por</label>
            <input type="text" class="col form-control" id="user" name="user" readonly value="{{ $factura->user->nombreCompleto() }}">
        </div>

        <h4>Datos del cliente</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" maxlength="11" value="{{$factura->servicio->proforma->cliente->ruc}}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" value="{{$factura->servicio->proforma->cliente->razon_social}}">
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_facturas');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
