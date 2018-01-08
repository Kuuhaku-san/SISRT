@extends('layouts.master')

@section('titulo')
    Modificar servicio
@endsection

@section('contenido')
    <h1>Servicio N° {{ $servicio->id }}</h1>
    <form action="/servicios/{{ $servicio->id }}" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" value="{{ $servicio->fecha }}" required>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="estado">Estado</label>
            <select name="estado" id="estado" class="col custom-select" required>
                <option value="P" {{$servicio->estado=='P'?'selected':''}}>Pendiente</option>
                <option value="O" {{$servicio->estado=='O'?'selected':''}}>Observado</option>
                <option value="T" {{$servicio->estado=='T'?'selected':''}}>Terminado</option>
            </select>
        </div>

        <h4>Cliente</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" value="{{ $servicio->proforma->cliente->ruc }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" value="{{ $servicio->proforma->cliente->razon_social }}" readonly>
        </div>

        <h4>Proforma</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="codigo">Código</label>
            <input class="col form-control" type="text" id="codigo" readonly value="{{ $servicio->proforma->codigo }}">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="fecha_p">Fecha</label>
            <input type="date" class="col form-control" id="fecha_p" value="{{ $servicio->proforma->fecha }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="tipo">Tipo de servicio</label>
            <input type="text" class="col form-control" id="tipo" value="{{ $servicio->proforma->tipo() }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="precio_mano_obra">Precio de mano de obra (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="precio_mano_obra" value="{{ $servicio->proforma->precio_mano_obra }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="monto_piezas">Monto por piezas (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="monto_piezas" value="{{ $servicio->proforma->monto_piezas() }}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="monto_total">Monto total (S/.)</label>
            <input type="number" class="col form-control" step="0.1" id="monto_total" value="{{ $servicio->proforma->monto_total() }}" readonly>
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
