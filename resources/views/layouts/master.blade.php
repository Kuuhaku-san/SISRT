<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>SISRT - @yield('titulo')</title>

    <!-- Bootstrap core CSS -->

    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>
    @include('layouts.header')

    <div class="container-fluid">
        <div class="row">
            @include('layouts.nav')

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <div class="container">
                    @yield('contenido')
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {{-- <script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script> --}}
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    @yield('footer')
</body>
</html>
