@extends('layouts.master')

@section('titulo')
    Generar servicio
@endsection

@section('contenido')
    <h1>Generar servicio</h1>
    <form action="/proformas/{{ $proforma->codigo }}/servicio" method="post">
        {{ csrf_field() }}

        <h4>Proforma</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="codigo">Código</label>
            <input class="col form-control" type="text" id="codigo" name="codigo" readonly value="{{ $proforma->codigo }}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" value="{{ $proforma->fecha }}" readonly>
        </div>

        <h4>Cliente</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" value="{{ $proforma->cliente->ruc }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" value="{{ $proforma->cliente->razon_social }}" readonly>
        </div>
        <div class="form-check">
            <label for="terminado" class="form-check-label">
                <input type="checkbox" name="terminado" value="1" class="form-check-input">
                Servicio terminado
            </label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
