@extends('layouts.master')

@section('titulo')
    Consulta de proveedor
@endsection

@section('contenido')
    <div class="col-sm-10">
        <h2>Resultado de la consulta</h2>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3">RUC</label>
            <input class="col form-control" type="text" readonly value="{{$res['ruc']}}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc">Razón social</label>
            <input class="col form-control" type="text" readonly value="{{$res['nombre_o_razon_social']}}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc">Estado del contribuyente</label>
            <input class="col form-control" type="text" readonly value="{{$res['estado_del_contribuyente']}}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc">Condición de domicilio</label>
            <input class="col form-control" type="text" readonly value="{{$res['condicion_de_domicilio']}}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc">Dirección completa</label>
            <input class="col form-control" type="text" readonly value="{{$res['direccion_completa']}}">
        </div>
    </div>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_proveedores');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
