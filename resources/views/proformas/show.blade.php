@extends('layouts.master')

@section('contenido')
    <div class="col-sm-8 blog-main">
    <h1>Proforma: {{ $proforma->codigo }}</h1>
    <ul>
        <li>{{ $proforma->fecha }}</li>
        <li>{{ $proforma->mano_de_obra }}</li>
        <li>{{ $proforma->precio_mano_obra }}</li>
    </ul>
    </div>
@endsection
