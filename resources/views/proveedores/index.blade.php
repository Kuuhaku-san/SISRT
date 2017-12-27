@extends('layouts.index')

@section('titulo')
    Proveedores
@endsection

@section('href_nuevo')
    "/proveedores/create"
@endsection

@section('cabeceras')
    <th scope="col">RUC</th>
    <th scope="col">Razón social</th>
    <th scope="col">Dirección</th>
    <th scope="col">Teléfono</th>
    <th scope="col">N° cuenta</th>
    <th scope="col">Rubro</th>
@endsection

@section('cuerpo')
    @foreach ($proveedores as $proveedor)
        <tr>
            <th scope="row">
                {{ $proveedor->ruc }}
            </th>
            <td>
                {{ $proveedor->razon_social }}
            </td>
            <td>
                {{ $proveedor->direccion }}
            </td>
            <td>
                {{ $proveedor->telefono }}
            </td>
            <td>
                {{ $proveedor->numero_cuenta }}
            </td>
            <td>
                {{ $proveedor->rubro }}
            </td>
            <td>
                @include('layouts.dropdown')
                        <a href="/proveedores/consultar/{{$proveedor->ruc}}" class="dropdown-item">
                            Consultar en SUNAT
                        </a>
                        <a href="/proveedores/{{ $proveedor->ruc }}/edit" class="dropdown-item">
                            Modificar
                        </a>
                        <a href="/proveedores/{{ $proveedor->ruc }}/eliminar" class="dropdown-item">
                            Eliminar
                        </a>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endsection
