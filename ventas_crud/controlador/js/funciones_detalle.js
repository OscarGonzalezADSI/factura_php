function agregardatos(id_detalle, factura_id, cantidad, descripcion, precio, iva, subtotal){
    cadena = "id_detalle=" + id_detalle +
    "&factura_id=" + factura_id +
    "&cantidad=" + cantidad +
    "&descripcion=" + descripcion +
    "&precio=" + precio +
    "&iva=" + iva +
    "&subtotal=" + subtotal;

    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_detalleu').val(d[0]);
    $('#factura_idu').val(d[1]);
    $('#cantidadu').val(d[2]);
    $('#descripcionu').val(d[3]);
    $('#preciou').val(d[4]);
    $('#ivau').val(d[5]);
    $('#subtotalu').val(d[6]);
}

function modificarCliente(){
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
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_detalle) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_detalle);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_detalle) {
    cadena = "id_detalle=" + id_detalle;

    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesDetalle.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
				alert(mensaje_si);
				$('#tabla').load('../vista/componentes/vista_detalle.php');
            } else {
                alert(mensaje_no);
            }
        }
    });
}
