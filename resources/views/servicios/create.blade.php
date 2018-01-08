@extends('layouts.master')

@section('titulo')
    Generar servicio
@endsection

@section('contenido')
    <h1>Generar servicio</h1>
    <form action="/proformas/{{ $proforma->codigo }}/servicio" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" value="{{Carbon\Carbon::now()->toDateString()}}" required>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="estado">Estado</label>
            <select name="estado" id="estado" class="col custom-select" required>
                <option value="P">Pendiente</option>
                <option value="O">Observado</option>
                <option value="T">Terminado</option>
            </select>
        </div>

        <h4>Cliente</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" value="{{ $proforma->cliente->ruc }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" value="{{ $proforma->cliente->razon_social }}" readonly>
        </div>

        <h4>Proforma</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="codigo">Código</label>
            <input class="col form-control" type="text" id="codigo" readonly value="{{ $proforma->codigo }}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="fecha_p">Fecha</label>
            <input type="date" class="col form-control" id="fecha_p" value="{{ $proforma->fecha }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="tipo">Tipo de servicio</label>
            <input type="text" class="col form-control" id="tipo" value="{{ $proforma->tipo() }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="precio_mano_obra">Precio de mano de obra (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="precio_mano_obra" value="{{ $proforma->precio_mano_obra }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="monto_piezas">Monto por piezas (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="monto_piezas" value="{{ $proforma->monto_piezas() }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="monto_total">Monto total (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="monto_total" value="{{ $proforma->monto_total() }}" readonly>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Guardar</button>
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
