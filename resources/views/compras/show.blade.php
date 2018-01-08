@extends('layouts.master')

@section('titulo')
    Modificar factura de compra
@endsection

@section('contenido')
    <h2>Factura de compra N° {{ $compra->id }}</h2>
    <hr>

    <form action="/compras/{{$compra->id}}" method="post">
        {{ method_field('PATCH')}}
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="servicio">Servicio N°</label>
            <input type="text" class="col form-control" id="servicio" name="servicio" value="{{ $compra->servicio->id }}" readonly>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" required value="{{ $compra->fecha }}">
        </div>

        <h4>Proveedor</h4><hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_p">RUC</label>
            <input type="text" class="col form-control" id="ruc_p" name="ruc_p" required maxlength="11" value="{{ $compra->proveedor->ruc }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" required value="{{ $compra->proveedor->razon_social }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="direccion">Dirección</label>
            <input type="tel" class="col form-control" id="direccion" name="direccion" value="{{ $compra->proveedor->direccion }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="telefono">Teléfono</label>
            <input type="tel" class="col form-control" id="telefono" name="telefono" value="{{ $compra->proveedor->telefono }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="numero_cuenta">Número de cuenta</label>
            <input type="text" class="col form-control" id="numero_cuenta" name="numero_cuenta" value="{{ $compra->proveedor->numero_cuenta }}">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="rubro">Rubro</label>
            <input type="text" class="col form-control" id="rubro" name="rubro"  value="{{ $compra->proveedor->rubro }}">
        </div>

        <h4>Piezas</h4>
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
                        @foreach ($compra->servicio->proforma->piezas as $pieza)
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
                            {{$compra->total()}}
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="form-group text-center">
            <button class="btn btn-primary" type="submit">Guardar cambios</button>
        </div>

        @include('layouts.errors')
    </form>
@endsection

@section('footer')
    <script src="/js/ruc_proveedor.js"></script>
    <script>
        var link = document.getElementById('nav_compras');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
