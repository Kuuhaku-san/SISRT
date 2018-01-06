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
                    <a href="/proveedores/{{ $proveedor->ruc }}" class="dropdown-item">
                        Mostrar
                    </a>
                    @if ($proveedor->habilitado)
                        <a href="/proveedores/{{ $proveedor->ruc }}/deshabilitar" class="dropdown-item">
                            Deshabilitar
                        </a>
                    @else
                        <a href="/proveedores/{{ $proveedor->ruc }}/habilitar" class="dropdown-item">
                            Habilitar
                        </a>
                    @endif
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_proveedores');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
