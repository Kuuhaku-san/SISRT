@extends('layouts.index')

@section('titulo')
    Servicios
@endsection

@section('href_nuevo')
    "/proformas"
@endsection

@section('cabeceras')
    <th scope="col">Id</th>
    <th scope="col">Proforma</th>
    <th scope="col">Cliente</th>
    <th scope="col">Estado</th>
    <th scope="col">Monto (S/.)</th>
@endsection

@section('cuerpo')
    @foreach ($servicios as $servicio)
        <tr>
            <th scope="row">{{ $servicio->id }}</th>
            <td>{{ $servicio->codigo_p }}</td>
            <td>{{ $servicio->proforma->cliente->razon_social }}</td>
            <td>{{ $servicio->estado() }}</td>
            <td>{{ $servicio->monto() }}</td>
            <td>
                @include('layouts.dropdown')
                    @if ($servicio->terminado() and !$servicio->factura())
                        <a href="/servicios/{{$servicio->id}}/factura" class="dropdown-item">
                            Generar factura
                        </a>
                    @elseif ($servicio->factura())
                        <a href="/facturas/{{$servicio->factura()->id}}" class="dropdown-item">
                            Ver factura
                        </a>
                    @endif
                    @if ($compra = $servicio->factura_compra)
                        <a href="/compras/{{$compra->id}}" class="dropdown-item">
                            Ver compra
                        </a>
                    @else
                        <a href="/servicios/{{$servicio->id}}/compra" class="dropdown-item">
                            Registrar compra
                        </a>
                    @endif
                    <a href="/servicios/{{$servicio->id}}" class="dropdown-item">
                        Mostrar
                    </a>
                    <a href="/servicios/{{$servicio->id}}/eliminar" class="dropdown-item">
                        Eliminar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_servicios');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
