function detalleRegistrar(factura_id, cantidad, descripcion, precio, iva, subtotal){
    cadena = "factura_id=" + factura_id +
    "&cantidad=" + cantidad +
    "&descripcion=" + descripcion +
    "&precio=" + precio +
    "&iva=" + iva +
    "&subtotal=" + subtotal;
    accion = "registrar";
    mensaje_si = "Detalle agregado con exito";
    mensaje_no= "Error de registro";
    detalle_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function detalleAgregaModificar(datos) {
    d = datos.split('||');
    $('#id_detalleu').val(d[0]);
    $('#factura_idu').val(d[1]);
    $('#cantidadu').val(d[2]);
    $('#descripcionu').val(d[3]);
    $('#preciou').val(d[4]);
    $('#ivau').val(d[5]);
    $('#subtotalu').val(d[6]);
}

function detalleModificar(){
    id_detalle = $('#id_detalleu').val();
    factura_id = $('#factura_idu').val();
    cantidad = $('#cantidadu').val();
    descripcion = $('#descripcionu').val();
    precio = $('#preciou').val();
    iva = $('#ivau').val();
    subtotal = $('#subtotalu').val();
    cadena = "id_detalle=" + id_detalle +
    "&factura_id=" + factura_id +
    "&cantidad=" + cantidad +
    "&descripcion=" + descripcion +
    "&precio=" + precio +
    "&iva=" + iva +
    "&subtotal=" + subtotal;

    accion = "modificar";
    mensaje_si = "Detalle modificado con exito";
    mensaje_no= "Error de registro";
    detalle_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function detalleConfirmaEliminar(id_detalle) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        detalleEliminar(id_detalle);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function detalleEliminar(id_detalle) {
    cadena = "id_detalle=" + id_detalle;
    accion = "eliminar";
    mensaje_si = "Detalle borrado con exito";
    mensaje_no= "Error de registro";
    detalle_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function detalle_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../controlador/php/accionesDetalle.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
				alert(mensaje_si);
				$('#tablaDetalle').load('../vista/componentes/vista_detalle.php')
				$('#descripcion').val("");
				$('#cantidad').val("");
				$('#precio').val("");
				$('#iva').val("");
				$('#subtotal').val("");
				window.setTimeout(function(){
					$('#registrarDetalle').click();
				}, 1000);
            } else {
                alert(mensaje_no);
            }
        }
    });
}
