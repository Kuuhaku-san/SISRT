@extends('layouts.index')

@section('titulo')
    Proformas
@endsection

@section('opciones')
    <div class="row mb-3">
        <div class="col-sm-2">
            <a class="btn btn-success" href="/proformas/create">Nuevo</a>
        </div>
        <div class="col">
            <form class="form-inline mt-2 mt-md-0" action="/proformas" method="get" autocomplete="off">
                <input class="form-control mr-sm-2" type="text" placeholder="Código" name="codigo">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
        <div class="col-6">
            <form class="form-inline mt-2 mt-md-0" action="/proformas" method="get">
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
    <th scope="col">Código</th>
    <th scope="col">Fecha</th>
    <th scope="col">Cliente</th>
    <th scope="col">Tipo</th>
    <th scope="col">Monto (S/.)</th>
@endsection

@section('cuerpo')
    @foreach ($proformas as $proforma)
        <tr>
            <th scope="row">
                {{ $proforma->codigo }}
            </th>
            <td>
                {{ (new Carbon\Carbon($proforma->fecha))->format('d/m/Y') }}
            </td>
            <td>
                {{ $proforma->cliente->razon_social }}
            </td>
            <td>
                {{ $proforma->tipo() }}
            </td>
            <td>
                {{ number_format($proforma->monto_total(), 2) }}
            </td>
            <td>
                @include('layouts.dropdown')
                    @if ($servicio = $proforma->servicio)
                        <a href="/servicios/{{ $servicio->id }}" class="dropdown-item">
                            Ver servicio
                        </a>
                    @else
                        <a href="/proformas/{{ $proforma->codigo }}/servicio" class="dropdown-item">
                            Generar servicio
                        </a>
                    @endif
                    <a href="/proformas/{{ $proforma->codigo }}" class="dropdown-item">
                        Mostrar
                    </a>
                    <a href="/proformas/{{ $proforma->codigo }}/eliminar" class="dropdown-item">
                        Eliminar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_proformas');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
