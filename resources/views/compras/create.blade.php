@extends('layouts.master')

@section('titulo')
    Registrar factura de compra
@endsection

@section('contenido')
    <h2>Registrar factura de compra</h2>
    <hr>

    <form action="/servicios/{{$servicio->id}}/compra" method="post">
        {{ csrf_field() }}

        <div class="form-group row">
            <label class="col-sm-3" for="servicio">Servicio</label>
            <input type="text" class="col form-control" id="servicio" name="servicio" value="{{ $servicio->id }}" readonly>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="fecha">Fecha</label>
            <input type="date" class="col form-control" id="fecha" name="fecha" required>
        </div>

        <h4>Datos del proveedor</h4>
        <hr>
        <div class="form-group row">
            <label class="col-sm-3" for="ruc_p">RUC</label>
            <input type="text" class="col form-control" id="ruc_p" name="ruc_p" required maxlength="11">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="razon_social">Razón social</label>
            <input type="text" class="col form-control" id="razon_social" name="razon_social" required>
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="direccion">Dirección</label>
            <input type="tel" class="col form-control" id="direccion" name="direccion">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="telefono">Teléfono</label>
            <input type="tel" class="col form-control" id="telefono" name="telefono">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="numero_cuenta">Número de cuenta</label>
            <input type="text" class="col form-control" id="numero_cuenta" name="numero_cuenta">
        </div>

        <div class="form-group row">
            <label class="col-sm-3" for="rubro">Rubro</label>
            <input type="text" class="col form-control" id="rubro" name="rubro">
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
                        </tr>
                        @foreach ($servicio->proforma->piezas as $pieza)
                            <tr>
                                <td class="col-2"></td>
                                <td class="col">{{ $pieza->nombre }}</td>
                                <td class="col-2"></td>
                                <td class="col-2"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-1"></div>
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit">Guardar</button>
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
