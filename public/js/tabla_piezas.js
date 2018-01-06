$('#btnNuevaFila').on('click', nuevaFila);

function nuevaFila() {
    var input_total = $('<input>'),
        input_cantidad = $('<input>'),
        input_pieza = $('<input>'),
        input_precio = $('<input>');

    $('#tablaPiezas')
    .append(
        $('<tr>').addClass('row')
        .append(
            $('<td>').addClass('col-2')
            .append(
                input_cantidad.addClass('form-control').attr('type', 'number').attr('name', 'cantidad[]').attr('value', '1').attr('min', '1').attr('required', 'true')
                .on('change', function(){
                    input_total.val(input_cantidad.val() * input_precio.val());
                })
            )
        )
        .append(
            $('<td>').addClass('col')
            .append(
                input_pieza.addClass('form-control typeahead')
                .attr({
                    'type': 'text',
                    'required' : 'true',
                    'placeholder' : 'Nombre de la pieza',
                    'name' : 'nombre_pieza[]'
                })
            )
        )
        .append(
            $('<td>').addClass('col-2')
            .append(
                input_precio.addClass('form-control')
                .attr('type', 'number').attr('name', 'precio[]').attr('min', '0.1').attr('step', '0.1').attr('required', 'true')
                .on('change', function(){
                    input_total.val(input_cantidad.val() * input_precio.val());
                })
            )
        )
        .append(
            $('<td>').addClass('col-2')
            .append(
                input_total.addClass('form-control')
                .attr('type', 'number').attr('value','0').attr('readonly', 'true')
            )
        )
        .append(
            $('<td>').addClass('col-2 text-center')
            .append(
                $('<div>').addClass('btn btn-danger').text('Eliminar')
                .on('click', eventoEliminar)
            )
        )
    )

    input_pieza.typeahead({
        hint: false,
        highlight: true,
        minLength: 1,
        classNames: {
            input: 'Typeahead-input',
            hint: 'Typeahead-hint',
            selectable: 'Typeahead-selectable'
          }
    },
    {
        source : function(query, syncResults, asyncResults) {
            $.ajax({
                url: '/pieza/buscar/' + query,
                type: 'GET',
                dataType: 'JSON',
                async: true,
                success: function(data){
                    asyncResults(data);
                }
            });
        }
    });
}

function eventoEliminar(){
    this.parentNode.parentNode.remove();
}
