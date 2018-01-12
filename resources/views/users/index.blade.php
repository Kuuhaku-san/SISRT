@extends('layouts.index')

@section('titulo')
    Usuarios
@endsection

@section('href_nuevo')

@endsection

@section('opciones')
    <div class="row mb-3">
        <div class="col-sm-2">
            <a class="btn btn-success" href="/users/create">Nuevo</a>
        </div>
    </div>
@endsection

@section('cabeceras')
    <th scope="col">DNI</th>
    <th scope="col">Nombres</th>
    <th scope="col">Tipo</th>
    <th scope="col">Habilitado</th>
@endsection

@section('cuerpo')
    @foreach ($usuarios as $usuario)
        <tr>
            <th scope="row">{{ $usuario->dni }}</th>
            <td>{{ $usuario->nombreCompleto() }}</td>
            <td>{{ $usuario->tipo() }}</td>
            <td>{{ $usuario->habilitado ? 'Si' : 'No' }}</td>
            <td>
                @include('layouts.dropdown')
                    <a href="/users/{{ $usuario->dni }}" class="dropdown-item">
                        Mostrar
                    </a>
                    @if ($usuario->habilitado)
                        <a href="/users/{{ $usuario->dni }}/deshabilitar" class="dropdown-item">
                            Deshabilitar
                        </a>
                    @else
                        <a href="/users/{{ $usuario->dni }}/habilitar" class="dropdown-item">
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
        var link = document.getElementById('nav_usuarios');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
