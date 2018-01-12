for (var i=0, filas=$('.item'); i < filas.length; i++) {
    var fila = $(filas[i]);
    var input_cantidad = fila.find('.cantidad'),
        input_pieza = fila.find('.typeahead'),
        input_precio = fila.find('.precio'),
        input_total = fila.find('.total');

    input_cantidad.on('change', function(){
        calcularSubtotal(input_cantidad, input_precio, input_total);
    });
    input_precio.on('change', function(){
        calcularSubtotal(input_cantidad, input_precio, input_total);
    });
    input_pieza.typeahead(addTypeahead()[0], addTypeahead()[1]);
    fila.find('.btn').on('click', eventoEliminar);
}

$('#tipo').on('change', function() {
    if ($('#tipo').val() === 'M') {
        $('.item').remove();
        $('#btnNuevaFila').addClass('disabled');
        $('#subtotal').val(0).change();
    }
    else {
        $('#btnNuevaFila').removeClass('disabled');
    }
});

$('#btnNuevaFila').on('click', nuevaFila);

$('#precio_mano_obra').on('change', calcularTotal);

$('#subtotal').on('change', calcularTotal);

function calcularTotal() {
    var monto_total = $('#monto_total'),
        subtotal = Number($('#subtotal').val()),
        precio_mano_obra = Number($('#precio_mano_obra').val());

    monto_total.val(subtotal + precio_mano_obra);
}

function nuevaFila() {
    if ($('#tipo').val() === 'M') return;

    var input_total = $('<input>'),
        input_cantidad = $('<input>'),
        input_pieza = $('<input>'),
        input_precio = $('<input>');

    $('#tablaPiezas')
    .append(
        $('<tr>').addClass('row item')
        .append(
            $('<td>').addClass('col-2')
            .append(
                input_cantidad.addClass('form-control cantidad')
                .attr({
                    'type': 'number',
                    'name': 'cantidad[]',
                    'value': '1',
                    'min': '1',
                    'required': 'true'
                })
                .on('change', function(){
                    calcularSubtotal(input_cantidad, input_precio, input_total);
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
            $('<td>').addClass('col-3')
            .append(
                input_precio.addClass('form-control precio')
                .attr({
                    'type': 'number',
                    'name': 'precio[]',
                    'min': '0.1',
                    'step': '0.1',
                    'required': 'true'
                })
                .on('change', function(){
                    calcularSubtotal(input_cantidad, input_precio, input_total);
                })
            )
        )
        .append(
            $('<td>').addClass('col-2')
            .append(
                input_total.addClass('form-control total')
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

    input_pieza.typeahead(addTypeahead()[0], addTypeahead()[1]);
}

function addTypeahead() {
    return [{
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
    }];
}

function calcularSubtotal(cantidad, precio, total){
    var subtotal = $('#subtotal');
    subtotal.val(Number(subtotal.val()) - Number(total.val()));
    total.val(cantidad.val() * precio.val());
    subtotal.val(Number(subtotal.val()) + Number(total.val())).change();
}

function eventoEliminar(){
    var subtotal = $('#subtotal'),
        total = $(this.parentNode.parentNode).find('.total').val();
    subtotal.val(Number(subtotal.val()) - Number(total)).change();
    this.parentNode.parentNode.remove();
}
