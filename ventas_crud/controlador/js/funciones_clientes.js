function agregardatos(id_cliente, nombre, nit, direccion, telefono){
    cadena = "id_cliente=" + id_cliente +
    "&nombre=" + nombre +
    "&nit=" + nit +
    "&direccion=" + direccion +
    "&telefono=" + telefono;
    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_clienteu').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#nitu').val(d[2]);
    $('#direccionu').val(d[3]);
    $('#telefonou').val(d[4]);
}

function modificarCliente(){
    id_cliente = $('#id_clienteu').val();
    nombre = $('#nombreu').val();
    nit = $('#nitu').val();
    direccion = $('#direccionu').val();
    telefono = $('#telefonou').val();
    cadena = "id_cliente=" + id_cliente +
    "&nombre=" + nombre +
    "&nit=" + nit +
    "&direccion=" + direccion +
    "&telefono=" + telefono;
    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_cliente) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_cliente);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_cliente) {
    cadena = "id_cliente=" + id_cliente;
    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesClientes.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
				alert(mensaje_si);
				$('#tabla').load('../vista/componentes/vista_clientes.php');
            } else {
                alert(r);
            }
        }
    });
}
