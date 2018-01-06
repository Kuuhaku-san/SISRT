$('#ruc_p').addEventListener('keyup', mostrarSugerencia);

function mostrarSugerencia() {
    var xmlhttp,
        ruc = this.value,
        input_rz = $('#razon_social'),
        input_tel = $('#telefono'),
        input_dir = $('#direccion'),
        input_nc = $('#numero_cuenta'),
        input_ru = $('#rubro'),
        proveedor;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }

    if (ruc.length < 11) {
        input_rz.value = '';
        input_tel.value = '';
        input_dir.value = '';
        input_nc.value = '';
        input_ru.value = '';
    } else {
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState === 4 && this.status === 200) {
                proveedor = JSON.parse(xmlhttp.responseText);
                input_rz.value = proveedor.razon_social;
                input_tel.value = proveedor.telefono;
                input_dir.value = proveedor.direccion;
                input_nc.value = proveedor.numero_cuenta;
                input_ru.value = proveedor.rubro;
                console.log(proveedor);
            }
        }
        xmlhttp.open('GET', '/proveedores/buscar/' + ruc, true);
        xmlhttp.send();
    }
}

function $(selector) {
    return document.querySelector(selector);
}
