@extends('layouts.index')

@section('titulo')
    Facturas de compra
@endsection

@section('href_nuevo')
    "/servicios"
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
            <td>{{ $compra->fecha }}</td>
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
