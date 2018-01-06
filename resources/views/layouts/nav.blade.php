<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S')
                <a class="nav-link disabled" id="nav_proformas" href="#">
            @else
                <a class="nav-link" id="nav_proformas" href="/proformas">
            @endif
                Proformas
            </a>
        </li>
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S')
                <a class="nav-link disabled" id="nav_servicios" href="#">
            @else
                <a class="nav-link" id="nav_servicios" href="/servicios">
            @endif
                Servicios
            </a>
        </li>
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S')
                <a class="nav-link disabled" id="nav_facturas" href="#">
            @else
                <a class="nav-link" id="nav_facturas" href="/facturas">
            @endif
                Facturas de servicio
            </a>
        </li>
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S')
                <a class="nav-link disabled" id="nav_clientes" href="#">
            @else
                <a class="nav-link" id="nav_clientes" href="/clientes">
            @endif
                Clientes
            </a>
        </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S' or Auth::user()->tipo == 'T')
                <a class="nav-link disabled" id="nav_compras" href="#">
            @else
                <a class="nav-link" id="nav_compras" href="/compras">
            @endif
                Facturas de compra
            </a>
        </li>
        <li class="nav-item">
            @if (Auth::user()->tipo == 'S' or Auth::user()->tipo == 'T')
                <a class="nav-link disabled" id="nav_proveedores" href="#">
            @else
                <a class="nav-link" id="nav_proveedores" href="/proveedores">
            @endif
                Proveedores
            </a>
        </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column">
        <li>
            @if (Auth::user()->tipo == 'T')
                <a class="nav-link disabled" id="nav_pagos" href="#">
            @else
                <a class="nav-link" id="nav_pagos" href="/pagos">
            @endif
                Pagos
            </a>
        </li>
    </ul>
    <hr>
    <ul class="nav nav-pills flex-column">
        <li>
            @if (Auth::user()->tipo == 'A')
                <a class="nav-link" id="nav_usuarios" href="/users">
            @else
                <a class="nav-link disabled" id="nav_usuarios" href="#">
            @endif
                Usuarios
            </a>
        </li>
    </ul>
</nav>
