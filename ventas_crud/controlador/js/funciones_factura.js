function agregardatos(id_factura, cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal){
    cadena = "id_factura=" + id_factura +
		"&cliente_id=" + cliente_id +
		"&facturaFecha=" + facturaFecha +
		"&facturaSubtotal=" + facturaSubtotal +
		"&facturaIva=" + facturaIva +
		"&facturaTotal=" + facturaTotal;
    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_facturau').val(d[0]);
    $('#cliente_idu').val(d[1]);
    $('#facturaFechau').val(d[2]);
    $('#facturaSubtotalu').val(d[3]);
    $('#facturaIvau').val(d[4]);
    $('#facturaTotalu').val(d[5]);
}

function modificarCliente(){
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
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_factura) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_factura);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_factura) {
    cadena = "id_factura=" + id_factura;
    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesFactura.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
                alert(mensaje_si);
				$('#tabla').load('../vista/componentes/vista_factura.php');
            } else {
                alert(mensaje_no);
            }
        }
    });
}
