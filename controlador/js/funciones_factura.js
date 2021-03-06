function facturaRegistrar(cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal){
    cadena = "cliente_id=" + cliente_id +
		"&facturaFecha=" + facturaFecha +
		"&facturaSubtotal=" + facturaSubtotal +
		"&facturaIva=" + facturaIva +
		"&facturaTotal=" + facturaTotal;
    accion = "registrar";
    mensaje_si = "Factura agregado con exito";
    mensaje_no= "Error de registro";
    factura_ajax_insertar(cadena, accion, mensaje_si, mensaje_no);
}
function facturaAgregaModificar(datos) {
    d = datos.split('||');
    $('#id_facturau').val(d[0]);
    $('#cliente_idu').val(d[1]);
    $('#facturaFechau').val(d[2]);
    $('#facturaSubtotalu').val(d[3]);
    $('#facturaIvau').val(d[4]);
    $('#facturaTotalu').val(d[5]);
}

function facturaModificar(){
    id_factura = $('#id_facturau').val();
    cliente_id = $('#cliente_idu').val();
    facturaFecha = $('#facturaFechau').val();
    facturaSubtotal = $('#facturaSubtotalu').val();
    facturaIva = $('#facturaIvau').val();
    facturaTotal = $('#facturaTotalu').val();
    cadena = "id_factura=" + id_factura +
		"&cliente_id=" + cliente_id +
		"&facturaFecha=" + facturaFecha +
		"&facturaSubtotal=" + facturaSubtotal +
		"&facturaIva=" + facturaIva +
		"&facturaTotal=" + facturaTotal;
    accion = "modificar";
    mensaje_si = "Factura modificada con exito";
    mensaje_no= "Error de registro";
    factura_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function facturaConfirmaEliminar(id_factura) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        facturaEliminar(id_factura);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function facturaEliminar(id_factura) {
    cadena = "id_factura=" + id_factura;
    accion = "eliminar";
    mensaje_si = "Factura borrado con exito";
    mensaje_no= "Error de registro";
    factura_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function facturaBuscar(id_factura){
    cadena = "id_factura=" + id_factura;
    accion = "buscar";
    factura_buscar_ajax(cadena, accion);
}

function factura_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../controlador/php/accionesFactura.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
                alert(mensaje_si);
                $('#tablaFactura').load('../vista/componentes/vista_factura.php');
            } else {
                alert(mensaje_no);
            }
        }
    });
}

function factura_buscar_ajax(cadena, accion){
    $.ajax({
        type: "POST",
        url: "../controlador/php/accionesClientes.php?accion="+accion,
        data: cadena,
        success: function (r){
			$('#factura_id').val(cadena.slice(11));
        }
    });
}

function factura_ajax_insertar(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../controlador/php/accionesFactura.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r !== 0){
				$('#tablaFactura').load('../vista/componentes/vista_factura.php');
                $('#factura_id').val(r);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
