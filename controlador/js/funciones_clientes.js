function clienteRegistrar(nombre, nit, direccion, telefono){
    cadena = "nombre=" + nombre +
    "&nit=" + nit +
    "&direccion=" + direccion +
    "&telefono=" + telefono;
    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    cliente_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function clienteAgregaModificar(datos) {
    d = datos.split('||');
    $('#id_clienteu').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#nitCliu').val(d[2]);
    $('#direccionCliu').val(d[3]);
    $('#telefonoCliu').val(d[4]);
}

function clienteModificar(){
    id_cliente = $('#id_clienteu').val();
    nombre = $('#nombreu').val();
    nit = $('#nitCliu').val();
    direccion = $('#direccionCliu').val();
    telefono = $('#telefonoCliu').val();
    cadena = "id_cliente=" + id_cliente +
    "&nombre=" + nombre +
    "&nit=" + nit +
    "&direccion=" + direccion +
    "&telefono=" + telefono;
    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    cliente_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function clienteConfirmaEliminar(id_cliente) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        clienteEliminar(id_cliente);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function clienteEliminar(id_cliente) {
    cadena = "id_cliente=" + id_cliente;
    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    cliente_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function cliente_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../controlador/php/accionesClientes.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
                alert(mensaje_si);
	        $('#tablaCliente').load('../vista/componentes/vista_clientes.php');
            } else {
                alert(r);
            }
        }
    });
}
