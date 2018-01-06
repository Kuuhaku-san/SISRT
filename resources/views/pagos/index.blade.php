@extends('layouts.master')

@section('titulo')
    Pagos
@endsection

@section('contenido')
    <h1>Pagos a la SUNAT</h1>

    <form action="/pagos" method="get">
        {{ csrf_field() }}
        <div class="row">
            <label class="col-2" for="mes">Mes</label>
            <select name="mes" id="mes" class="col custom-select" required>
                <option value="01">Enero</option>
                <option value="02">Febrero</option>
                <option value="03">Marzo</option>
                <option value="04">Abril</option>
                <option value="05">Mayo</option>
                <option value="06">Junio</option>
                <option value="07">Julio</option>
                <option value="08">Agosto</option>
                <option value="09">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>

            <label class="col-2" for="año">Año</label>
            <select name="año" id="año" class="col custom-select" required>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
            </select>

            <button class="col-1 btn btn-primary" type="submit">Consultar</button>
        </div>
    </form>

    <div class="">
        
    </div>
@endsection
