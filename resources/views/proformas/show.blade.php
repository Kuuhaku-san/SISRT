@extends('layouts.master')

@section('titulo')
    Modificar proforma
@endsection

@section('contenido')
    <h2>Proforma {{ $proforma->codigo}}</h2>
    <hr>

    <form method="POST" action="/proformas">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" value="{{ $proforma->fecha }}" required>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="user">Atendido por</label>
            <input type="text" class="col form-control" id="user" name="user" readonly value="{{ $proforma->user->nombreCompleto() }}">
        </div>

        <h4>Datos del cliente</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" name="ruc_c" value="{{ $proforma->cliente->ruc }}" required maxlength="11">
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social"  value="{{ $proforma->cliente->razon_social }}" required>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="direccion">Dirección</label>
            <input type="text" class="col form-control" id="direccion" name="direccion" value="{{ $proforma->cliente->direccion }}" required>
        </div>
        <h4>Detalle del servicio</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="tipo">Tipo de servicio</label>
            <select name="tipo" id="tipo" class="col custom-select" required>
                <option value="I"
                    @if ($proforma->tipo == 'I')
                        selected
                    @endif
                >Instalación</option>
                <option value="M"
                    @if ($proforma->tipo == 'M')
                        selected
                    @endif
                >Mantenimiento</option>
                <option value="R"
                    @if ($proforma->tipo == 'R')
                        selected
                    @endif
                >Reparación</option>
            </select>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="mano_de_obra">Mano de obra</label>
            <textarea class="col form-control" id="mano_de_obra" name="mano_de_obra" required>{{ $proforma->mano_de_obra }}</textarea>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="precio_mano_obra">Precio de mano de obra</label>
            <input type="number" step="0.1" class="col form-control" id="precio_mano_obra" name="precio_mano_obra" min="0" value="{{ $proforma->precio_mano_obra }}"required>
        </div>

        <h4>Piezas</h4>
        <hr>
        <div class="form-group row">
            <div class="col-1"></div>
            <div class="col">
                <table class="table">
                    <tbody id="tablaPiezas">
                        <tr class="row">
                            <th class="col-2">Cantidad</th>
                            <th class="col">Pieza</th>
                            <th class="col-2">Precio unitario</th>
                            <th class="col-2">Precio total</th>
                            <th class="col-2">Opciones</th>
                        </tr>
                        @php
                            $subtotal = 0;
                        @endphp
                        @foreach ($proforma->piezas as $pieza)
                            <tr class="row">
                                <td class="col-2">
                                    <input class="form-control" type="number" name="cantidad[]" value="1" min="1" value="{{$pieza->pivot->cantidad}}">
                                </td>
                                <td class="col">
                                    <input class="form-control" type="text" name="nombre_pieza[]" placeholder="Nombre de la pieza" value="{{$pieza->nombre}}" onkeyup="mostrarSugerencia">
                                </td>
                                <td class="col-2">
                                    <input class="form-control" type="number" name="precio[]" min="0.1" step="0.1" value="{{$pieza->pivot->precio}}">
                                </td>
                                @php
                                    $total = $pieza->pivot->cantidad * $pieza->pivot->precio;
                                    $subtotal += $total;
                                @endphp
                                <td class="col-2">
                                    <input class="form-control" type="number" value="{{$total}}" readonly>
                                </td>
                                <td class="col-2 text-center">
                                    <div class="btn btn-danger" onclick="eventoEliminar">
                                        Eliminar
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr class="row">
                        <td class="col-2"><div class="btn btn-success" id="btnNuevaFila">Nuevo</div></td>
                        <td class="col"></td>
                        <td class="col-2">
                            <label for="subtotal">Subtotal</label>
                        </td>
                        <td class="col-2">
                            <input type="number" class="form-control" id="subtotal" value="{{$subtotal}}" readonly>
                        </td>
                        <td class="col-2"></td>
                    </tr>
                </table>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="monto_total">Monto total</label>
            <input type="number" class="col form-control" id="monto_total piezas" readonly value="{{$proforma->precio_mano_obra + $subtotal}}">
        </div>

        <hr>
        <div class="form-group text-center">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection

@section('footer')
    <script src="/js/tabla_piezas.js"></script>
    <script src="/js/ruc_cliente.js"></script>
    <script>
        var link = document.getElementById('nav_proformas');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
