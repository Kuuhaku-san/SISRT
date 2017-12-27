@extends('layouts.master')

@section('titulo')
    Registro de usuario
@endsection

@section('contenido')
    <div class="col-sm-8 blog-main">
        <h3>Registro de usuario</h3>
        <hr>
        <form action="/register" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" class="form-control" required maxlength="8">
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="apellido_p">Apellido paterno</label>
                    <input type="text" name="apellido_p" id="apellido_p" class="form-control" required>
                </div>

                <div class="form-group col">
                    <label for="apellido_m">Apellido materno</label>
                    <input type="text" name="apellido_m" id="apellido_m" class="form-control" required>
                </div>

                <div class="form-group col">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <label for="tipo">Tipo de usuario</label>
                <select name="tipo" id="tipo" class="custom-select ml-2" required>
                    <option value="admin">Administrador</option>
                    <option value="tecnico">Técnico</option>
                    <option value="secre">Secretaria</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-row">
                <div class="form-group col">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="form-group col">
                    <label for="password_confirmation">Confirmación de contraseña</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection
