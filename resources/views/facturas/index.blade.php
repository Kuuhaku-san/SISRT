@extends('layouts.index')

@section('titulo')
    Facturas de servicio
@endsection

@section('opciones')
    <div class="row mb-3">
        <div class="col">
            <form class="form-inline mt-2 mt-md-0" action="/facturas" method="get" autocomplete="off">
                <input class="form-control mr-sm-2" type="text" placeholder="Id" name="id">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-8">
            <form class="form-inline mt-2 mt-md-0" action="/facturas" method="get">
                <label class="mr-2" for="inicio">Desde</label>
                <input class="form-control mr-3" type="date" name="inicio" value="{{$inicio}}">
                <label class="mr-2" for="fin">Hasta</label>
                <input class="form-control mr-2" type="date" name="fin" value="{{$fin}}">
                <label class="mr-2" for="anulado">Anulado</label>
                <select name="anulado" id="anulado" class="mr-2 custom-select">
                    <option value="2" {{$anulado=='2'?'selected':''}}>Todos</option>
                    <option value="1" {{$anulado=='1'?'selected':''}}>Sí</option>
                    <option value="0" {{$anulado=='0'?'selected':''}}>No</option>
                </select>
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
@endsection

@section('cabeceras')
    <th scope="col">#</th>
    <th scope="col">Fecha</th>
    <th scope="col">Cliente</th>
    <th scope="col">Monto (S/.)</th>
    <th scope="col">Anulado</th>
@endsection

@section('cuerpo')
    @foreach ($facturas as $factura)
        <tr>
            <th scope="row">{{ $factura->id }}</th>
            <td>{{ (new Carbon\Carbon($factura->fecha))->format('d/m/Y') }}</td>
            <td>{{ $factura->cliente->razon_social }}</td>
            <td>{{ number_format($factura->total(),2) }}</td>
            <td>{{ $factura->anulado ? 'Si' : 'No' }}</td>
            <td>
                @include('layouts.dropdown')
                    <a href="/facturas/{{$factura->id}}" class="dropdown-item">
                        Mostrar
                    </a>
                    <a href="/facturas/{{$factura->id}}/anular" class="dropdown-item">
                        Anular
                    </a>
                    <a href="/facturas/{{$factura->id}}/eliminar" class="dropdown-item">
                        Eliminar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_facturas');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
