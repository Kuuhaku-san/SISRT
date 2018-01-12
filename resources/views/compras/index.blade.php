@extends('layouts.index')

@section('titulo')
    Facturas de compra
@endsection

@section('opciones')
    <div class="row mb-3">
        <div class="col">
            <form class="form-inline mt-2 mt-md-0" action="/compras" method="get" autocomplete="off">
                <input class="form-control mr-sm-2" type="text" placeholder="Id" name="id" value="{{$id}}">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-8">
            <form class="form-inline mt-2 mt-md-0" action="/compras" method="get">
                <label class="mr-2" for="inicio">Desde</label>
                <input class="form-control mr-3" type="date" name="inicio" value="{{$inicio}}">
                <label class="mr-2" for="fin">Hasta</label>
                <input class="form-control mr-2" type="date" name="fin" value="{{$fin}}">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
@endsection

@section('cabeceras')
    <th scope="col">#</th>
    <th scope="col">Fecha</th>
    <th scope="col">Servicio</th>
    <th scope="col">Proveedor</th>
    <th scope="col">Total</th>
@endsection

@section('cuerpo')
    @foreach ($compras as $compra)
        <tr>
            <th scope="row">{{ $compra->id }}</th>
            <td>{{ (new Carbon\Carbon($compra->fecha))->format('d/m/Y') }}</td>
            <td>{{ $compra->servicio->id }}</td>
            <td>{{ $compra->proveedor->razon_social }}</td>
            <td>{{ $compra->total() }}</td>
            <td>
                @include('layouts.dropdown')
                    <a href="/compras/{{$compra->id}}" class="dropdown-item">
                        Mostrar
                    </a>
                    <a href="/compras/{{$compra->id}}/eliminar" class="dropdown-item">
                        Eliminar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_compras');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
