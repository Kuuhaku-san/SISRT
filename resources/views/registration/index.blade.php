@extends('layouts.index')

@section('titulo')
    Usuarios
@endsection

@section('href_nuevo')
    "/register"
@endsection

@section('cabeceras')
    <th scope="col">DNI</th>
    <th scope="col">Nombres</th>
    <th scope="col">Tipo</th>
@endsection

@section('cuerpo')
    @foreach ($usuarios as $usuario)
        <tr>
            <th scope="row">{{ $usuario->dni }}</th>
            <td>{{ $usuario->nombreCompleto() }}</td>
            <td>{{ $usuario->tipo }}</td>
            <td>
                @include('layouts.dropdown')
                    <a href="/users/{{ $usuario->dni }}/editar" class="dropdown-item">
                        Modificar
                    </a>
                    <a href="/users/{{ $usuario->dni }}/desactivar" class="dropdown-item">
                        Desactivar
                    </a>
                </div></div>
            </td>
        </tr>
    @endforeach
@endsection
