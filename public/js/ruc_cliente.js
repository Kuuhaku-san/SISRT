$_('#ruc_c').addEventListener('keyup', sugerenciaCliente);

function sugerenciaCliente() {
    var xmlhttp,
        ruc = this.value,
        input_rz = $_('#razon_social'),
        input_dir = $_('#direccion'),
        cliente;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    if (ruc.length < 11) {
        input_rz.value = '';
        input_dir.value = '';
    } else {
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && this.status === 200) {
                cliente = JSON.parse(xmlhttp.responseText);
                input_rz.value = cliente.razon_social;
                input_dir.value = cliente.direccion;
            }
        }
        xmlhttp.open('GET', '/clientes/buscar/' + ruc, true);
        xmlhttp.send();
    }
}

function $_(selector) {
    return document.querySelector(selector);
}
