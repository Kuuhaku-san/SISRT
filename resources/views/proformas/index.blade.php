@extends('layouts.index')

@section('titulo')
    Proformas
@endsection

@section('href_nuevo')
    "/proformas/create"
@endsection

@section('cabeceras')
    <th scope="col">Código</th>
    <th scope="col">Fecha</th>
    <th scope="col">Cliente</th>
    <th scope="col">Tipo</th>
    <th scope="col">Precio</th>
@endsection

@section('cuerpo')
    @foreach ($proformas as $proforma)
        <tr>
            <th scope="row">
                {{ $proforma->codigo }}
            </th>
            <td>
                {{ $proforma->fecha }}
            </td>
            <td>
                {{ $proforma->cliente->razon_social }}
            </td>
            <td>
                {{ $proforma->tipo() }}
            </td>
            <td>
                {{ $proforma->precio_mano_obra }}
            </td>
            <td>
                @include('layouts.dropdown')
                    <a href="/proformas/{{ $proforma->codigo }}/servicio" class="dropdown-item">
                        Generar servicio
                    </a>
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
