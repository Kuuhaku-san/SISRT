@extends('layouts.master')

@section('titulo')
    Registrar proforma
@endsection

@section('contenido')
    <h2>Crear proforma</h2>
    <hr>

    <form method="POST" action="/proformas">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="codigo">Código</label>
            <input class="col form-control" type="text" id="codigo" name="codigo" readonly>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" required>
        </div>
        <h4>Datos del cliente</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" required maxlength="11">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" required>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="direccion">Dirección</label>
            <input type="text" class="col form-control" id="direccion" name="direccion" required>
        </div>
        <h4>Detalle del servicio</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="tipo">Tipo de servicio</label>
            <select name="tipo" id="tipo" class="col custom-select" required>
                <option value="I">Instalación</option>
                <option value="M">Mantenimiento</option>
                <option value="R">Reparación</option>
            </select>
        </div>

        <div class="form-group">

        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="mano_de_obra">Mano de obra</label>
            <textarea class="col form-control" id="mano_de_obra" name="mano_de_obra" required></textarea>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="precio_mano_obra">Precio</label>
            <input type="number" step="0.1" class="col form-control" id="precio_mano_obra" name="precio_mano_obra" min="0">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection
