@extends('layouts.index')

@section('titulo')
    Clientes
@endsection

@section('href_nuevo')
    "/clientes/create"
@endsection

@section('cabeceras')
    <th scope="col">RUC</th>
    <th scope="col">Razón social</th>
    <th scope="col">Dirección</th>
    <th scope="col">Habilitado</th>
@endsection

@section('cuerpo')
    @foreach ($clientes as $cliente)
        <tr>
            <th scope="row">
                {{ $cliente->ruc }}
            </th>
            <td>
                {{ $cliente->razon_social }}
            </td>
            <td>
                {{ $cliente->direccion }}
            </td>
            <td>
                {{ $cliente->habilitado ? 'Si':'No' }}
            </td>
            <td>
                @include('layouts.dropdown')
                    <a href="/clientes/{{ $cliente->ruc }}/historial" class="dropdown-item">
                        Historial de servicios
                    </a>
                    <a href="/clientes/{{ $cliente->ruc }}" class="dropdown-item">
                        Mostrar
                    </a>
                    @if ($cliente->habilitado)
                        <a href="/clientes/{{ $cliente->ruc }}/deshabilitar" class="dropdown-item">
                            Deshabilitar
                        </a>
                    @else
                        <a href="/clientes/{{ $cliente->ruc }}/habilitar" class="dropdown-item">
                            Habilitar
                        </a>
                    @endif
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_clientes');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
