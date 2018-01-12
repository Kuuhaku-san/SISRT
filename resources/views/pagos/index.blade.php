@extends('layouts.master')

@section('titulo')
    Pagos
@endsection

@section('contenido')
    <h1>Pagos a la SUNAT</h1>

    <form class="row" action="/pagos" method="get">
        {{ csrf_field() }}
            <label class="col-2" for="mes">Mes</label>
            <select name="mes" id="mes" class="col custom-select" required>
                <option value="1" {{ $mes == 1 ? 'selected' : ''}}>Enero</option>
                <option value="2" {{ $mes == 2 ? 'selected' : ''}}>Febrero</option>
                <option value="3" {{ $mes == 3 ? 'selected' : ''}}>Marzo</option>
                <option value="4" {{ $mes == 4 ? 'selected' : ''}}>Abril</option>
                <option value="5" {{ $mes == 5 ? 'selected' : ''}}>Mayo</option>
                <option value="6" {{ $mes == 6 ? 'selected' : ''}}>Junio</option>
                <option value="7" {{ $mes == 7 ? 'selected' : ''}}>Julio</option>
                <option value="8" {{ $mes == 8 ? 'selected' : ''}}>Agosto</option>
                <option value="9" {{ $mes == 9 ? 'selected' : ''}}>Septiembre</option>
                <option value="10" {{ $mes == 10 ? 'selected' : ''}}>Octubre</option>
                <option value="11" {{ $mes == 11 ? 'selected' : ''}}>Noviembre</option>
                <option value="12" {{ $mes == 12 ? 'selected' : ''}}>Diciembre</option>
            </select>

            <label class="col-2" for="año">Año</label>
            <select name="año" id="año" class="col custom-select" required>
                @foreach ($años as $a)
                    <option value="{{$a->a}}" {{$año == $a->a ? 'selected':''}}>{{$a->a}}</option>
                @endforeach
            </select>

            <div class="col-2 form-group">
                <button class="btn btn-primary" type="submit">Consultar</button>
            </div>
    </form>

    <div class="row">
        <div class="col-1"></div>
        <table class="col table table-bordered">
            <thead>
                <th scope="col">Concepto</th>
                <th scope="col">Monto (S/.)</th>
            </thead>
            <tbody>
                <tr>
                    <td>Pago por IGV</td>
                    <td>{{ $igv }}</td>
                </tr>
                <tr>
                    <td>Impuesto a la renta</td>
                    <td>{{ $ir }}</td>
                </tr>
            </tbody>
        </table>
        <div class="col-1"></div>
    </div>
@endsection
