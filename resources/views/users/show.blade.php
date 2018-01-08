@extends('layouts.master')

@section('titulo')
    Modificar usuario
@endsection

@section('contenido')
    <h3>Usuario {{ $user->dni }}</h3>
    <hr>
    <div class="col-sm-8">
        <form action="/users/{{ $user->dni }}" method="post">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}

            <div class="form-row">
                <div class="form-group col">
                    <label for="apellido_p">Apellido paterno</label>
                    <input type="text" name="apellido_p" id="apellido_p" class="form-control" required value="{{$user->apellido_p}}">
                </div>

                <div class="form-group col">
                    <label for="apellido_m">Apellido materno</label>
                    <input type="text" name="apellido_m" id="apellido_m" class="form-control" required value="{{$user->apellido_m}}">
                </div>

                <div class="form-group col">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required value="{{$user->nombres}}">
                </div>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de usuario</label>
                <select name="tipo" id="tipo" class="custom-select ml-2" required>
                    <option value="A" {{$user->tipo == 'A' ? 'selected':''}}>Administrador</option>
                    <option value="T" {{$user->tipo == 'T' ? 'selected':''}}>Técnico</option>
                    <option value="S" {{$user->tipo == 'S' ? 'selected':''}}>Secretaria</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required value="{{$user->email}}">
            </div>

            <div class="form-check">
                <label for="habilitado" class="form-check-label">
                    <input type="checkbox" name="habilitado" value="1" class="form-check-input" {{$user->habilitado ? 'checked':''}}>
                    Habilitado
                </label>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection

@section('footer')
    <script>
        var link = document.getElementById('nav_usuarios');
        link.setAttribute('class', 'nav-link active');
    </script>
@endsection
