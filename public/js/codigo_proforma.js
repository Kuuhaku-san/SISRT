$(funcMain);

function funcMain() {
    var input_fecha = document.getElementById('fecha');

    input_fecha.addEventListener('change', generarCodigo);
    generarCodigo();
}

function generarCodigo() {
    var año = (new Date( $('#fecha').val() )).getFullYear();
    $.ajax({
        url : '/proformas/generar/' + año,
        type : 'GET',
        dataType : 'JSON',
        async : true,
        success : function(data) {
            $('#codigo').val(data.codigo);
        }
    })
}
