[
    @if (isset($piezas))
        @for ($i=0; $i<count($piezas); $i++)
            {{-- {
                "id" : "{{ $piezas[$i]['id'] }}",
                "nombre" : "{{ $piezas[$i]['nombre'] }}"
            } --}}
            "{{ $piezas[$i]['nombre'] }}"
            @if ($i < count($piezas)-1)
                ,
            @endif
        @endfor
    @endif
]
