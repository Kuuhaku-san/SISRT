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
                @include('layouts.dropdown')
                    <a href="/clientes/{{ $cliente->ruc }}/editar" class="dropdown-item">
                        Editar
                    </a>
                    <a href="/clientes/{{ $cliente->ruc }}/eliminar" class="dropdown-item">
                        Eliminar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection
