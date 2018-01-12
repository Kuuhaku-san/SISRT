@extends('layouts.index')

@section('titulo')
    Servicios
@endsection

@section('opciones')
    <div class="row mb-3">
        <div class="col-4">
            <form class="form-inline mt-2 mt-md-0" action="/servicios" method="get" autocomplete="off">
                <input class="form-control mr-sm-1" type="text" placeholder="Id" name="id">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col">
            <form class="form-inline mt-2 mt-md-0" action="/servicios" method="get">
                <label class="mr-1" for="inicio">Desde</label>
                <input class="form-control mr-2" type="date" name="inicio" value="{{$inicio}}">
                <label class="mr-1" for="fin">Hasta</label>
                <input class="form-control mr-2" type="date" name="fin" value="{{$fin}}">
                <label class="mr-1" for="estado">Estado</label>
                <select name="estado" id="estado" class="mr-2 custom-select">
                    <option value="A" {{$estado=='A'?'selected':''}}>Todos</option>
                    <option value="P" {{$estado=='P'?'selected':''}}>Pendiente</option>
                    <option value="O" {{$estado=='O'?'selected':''}}>Observado</option>
                    <option value="T" {{$estado=='T'?'selected':''}}>Terminado</option>
                </select>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
@endsection

@section('cabeceras')
    <th scope="col">Id</th>
    <th scope="col">Fecha</th>
    <th scope="col">Proforma</th>
    <th scope="col">Cliente</th>
    <th scope="col">Estado</th>
    <th scope="col">Monto (S/.)</th>
@endsection

@section('cuerpo')
    @foreach ($servicios as $servicio)
        <tr>
            <th scope="row">{{ $servicio->id }}</th>
            <td>{{ (new Carbon\Carbon($servicio->fecha))->format('d/m/Y') }}</td>
            <td>{{ $servicio->codigo_p }}</td>
            <td>{{ $servicio->proforma->cliente->razon_social }}</td>
            <td>{{ $servicio->estado() }}</td>
            <td>{{ number_format($servicio->monto(), 2) }}</td>
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
