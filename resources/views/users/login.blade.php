<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>SISRT - Inicio de sesión</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/login.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="/login" method="post">
          {{ csrf_field() }}
        <h2 class="form-signin-heading">Inicio de sesión</h2>

        <label for="dni" class="sr-only">DNI</label>
        <input type="text" id="dni" name="dni" class="form-control" placeholder="DNI" required autofocus maxlength="8" value="{{old('dni')}}">

        <label for="password" class="sr-only">Contraseña</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</button>

        @include('layouts.errors')
      </form>

    </div>
  </body>
</html>
