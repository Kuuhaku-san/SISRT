@extends('layouts.master')

@section('titulo')
    Generar factura de servicio
@endsection

@section('contenido')
    <h2>Generar factura de servicio</h2>
    <hr>

    <form action="/servicios/{{ $servicio->id }}/factura" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" required value="{{Carbon\Carbon::now()->toDateString()}}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="user">Emitido por</label>
            <input type="text" class="col form-control" id="user" readonly value="{{ Auth::user()->nombreCompleto() }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="proforma">Proforma</label>
            <input type="text" class="col form-control" id="proforma" readonly value="{{ $servicio->proforma->codigo }}">
        </div>

        <h4>Cliente</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_c">RUC</label>
            <input type="text" class="col form-control" id="ruc_c" maxlength="11" value="{{$servicio->cliente->ruc}}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" value="{{$servicio->cliente->razon_social}}" readonly>
        </div>
        <div class="form-group row">
            <label class="col-sm-3" for="direccion">Dirección</label>
            <input type="text" class="col form-control" id="direccion" value="{{$servicio->cliente->direccion}}" readonly>
        </div>

        <h4>Detalle</h4>
        <hr>
        <div class="form-group row">
            <div class="col-1"></div>
            <div class="col">
                <table class="table">
                    <tr class="row">
                        <th class="col-2">Cantidad</th>
                        <th class="col">Descripción</th>
                        <th class="col-3">Precio unitario (S/.)</th>
                        <th class="col-2">Precio total (S/.)</th>
                    </tr>
                    <tbody>
                        <tr class="row item">
                            <td class="col-2">1</td>
                            <td class="col">
                                {{'Servicio de '.$servicio->proforma->tipo()}}
                            </td>
                            <td class="col-3">
                                {{$servicio->proforma->precio_mano_obra}}
                            </td>
                            <td class="col-2">
                                {{$servicio->proforma->precio_mano_obra}}
                            </td>
                        </tr>
                        @foreach ($servicio->proforma->piezas as $pieza)
                            <tr class="row item">
                                <td class="col-2">
                                    {{$pieza->pivot->cantidad}}
                                </td>
                                <td class="col">
                                    {{$pieza->nombre}}
                                </td>
                                <td class="col-3">
                                    {{$pieza->pivot->precio}}
                                </td>
                                @php
                                $total = $pieza->pivot->cantidad * $pieza->pivot->precio;
                                @endphp
                                <td class="col-2">
                                    {{$total}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tr class="row">
                        <td class="col-2"></td>
                        <td class="col"></td>
                        <th scope="row" class="col-3">
                            <label for="subtotal">Subtotal (S/.)</label>
                        </th>
                        <td class="col-2">
                            {{$servicio->monto()}}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-2"></td>
                        <td class="col"></td>
                        <th scope="row" class="col-3">
                            <label for="subtotal">IGV (S/.)</label>
                        </th>
                        <td class="col-2">
                            {{$servicio->monto()}}
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-2"></td>
                        <td class="col"></td>
                        <th scope="row" class="col-3">
                            <label for="total">Total (S/.)</label>
                        </th>
                        <td class="col-2">
                            {{$servicio->monto()}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Guardar</button>
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
