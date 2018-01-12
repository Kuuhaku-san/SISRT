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
            <input type="date" class="col form-control" id="fecha" name="fecha" required value="{{Carbon\Carbon::now()->toDateString()}}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="user">Atendido por</label>
            <input type="text" class="col form-control" id="user" name="user" readonly value="{{ Auth::user()->nombreCompleto() }}">
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

        <h4>Piezas</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="tipo">Tipo de servicio</label>
            <select name="tipo" id="tipo" class="col custom-select" required>
                <option value="I">Instalación</option>
                <option value="M">Mantenimiento</option>
                <option value="R">Reparación</option>
            </select>
        </div>
        <div class="form-group row">
            <div class="col-1"></div>
            <div class="col">
                <table class="table">
                    <tbody id="tablaPiezas">
                        <tr class="row">
                            <th class="col-2">Cantidad</th>
                            <th class="col">Pieza</th>
                            <th class="col-3">Precio unitario (S/.)</th>
                            <th class="col-2">Precio total (S/.)</th>
                            <th class="col-2"></th>
                        </tr>
                    </tbody>
                    <tr class="row">
                        <td class="col-2">
                            <div class="btn btn-success" id="btnNuevaFila">Nuevo</div>
                        </td>
                        <td class="col"></td>
                        <td class="col-3">
                            <label for="subtotal">Subtotal (S/.)</label>
                        </td>
                        <td class="col-2">
                            <input type="number" class="form-control" id="subtotal" value="" readonly>
                        </td>
                        <td class="col-2"></td>
                    </tr>
                </table>
            </div>
            <div class="col-1"></div>
        </div>

        <h4>Detalle del servicio</h4>
        <hr>

        <div class="form-group row">
            <label class="col-sm-3" for="mano_de_obra">Mano de obra</label>
            <textarea class="col form-control" id="mano_de_obra" name="mano_de_obra" rows="8"></textarea>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="precio_mano_obra">Precio de mano de obra (S/.)</label>
            <input type="number" step="0.1" class="col form-control" id="precio_mano_obra" name="precio_mano_obra" min="0">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="monto_total">Monto total (S/.)</label>
            <input type="number" class="col form-control" id="monto_total" readonly value="">
        </div>

        <hr>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection

@section('footer')
    <script src="/js/typeahead.js"></script>
    <script src="/js/tabla_piezas.js"></script>
    <script src="/js/ruc_cliente.js"></script>
    <script src="/js/codigo_proforma.js"></script>
    <script>
        var link = document.getElementById('nav_proformas');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
