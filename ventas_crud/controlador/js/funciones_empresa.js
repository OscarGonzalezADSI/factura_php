function agregardatos(id_empresa, empresa, nit, direccion, telefono, ciudad, correo){
    cadena = "id_empresa=" + id_empresa +
		"&empresa=" + empresa +
		"&nit=" + nit +
		"&direccion=" + direccion +
		"&telefono=" + telefono +
		"&ciudad=" + ciudad +
		"&correo=" + correo;
    accion = "registrar";
    mensaje_si = "Cliente agregado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}
function agregaform(datos) {
    d = datos.split('||');
    $('#id_empresau').val(d[0]);
    $('#empresau').val(d[1]);
    $('#nitu').val(d[2]);
    $('#direccionu').val(d[3]);
    $('#telefonou').val(d[4]);
    $('#ciudadu').val(d[5]);
    $('#correou').val(d[6]);
}

function modificarCliente(){
    id_empresa = $('#id_empresau').val();
    empresa = $('#empresau').val();
    nit = $('#nitu').val();
    direccion = $('#direccionu').val();
    telefono = $('#telefonou').val();
    ciudad = $('#ciudadu').val();
    correo = $('#correou').val();
    cadena = "id_empresa=" + id_empresa +
		"&empresa=" + empresa +
		"&nit=" + nit +
		"&direccion=" + direccion +
		"&telefono=" + telefono +
		"&ciudad=" + ciudad +
		"&correo=" + correo;
    accion = "modificar";
    mensaje_si = "Cliente modificado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function preguntarSiNo(id_empresa) {
    var opcion = confirm("¿Esta seguro de eliminar el registro?");
    if (opcion == true) {
        alert("El registro será eliminado.");
        eliminarDatos(id_empresa);
    } else {
        alert("El proceso de eliminación del registro ha sido cancelado.");
    }
}

function eliminarDatos(id_empresa) {
    cadena = "id_empresa=" + id_empresa;
    accion = "eliminar";
    mensaje_si = "Cliente borrado con exito";
    mensaje_no= "Error de registro";
    a_ajax(cadena, accion, mensaje_si, mensaje_no);
}

function a_ajax(cadena, accion, mensaje_si, mensaje_no){
    $.ajax({
        type: "POST",
        url: "../modelo/accionesEmpresa.php?accion="+accion,
        data: cadena,
        success: function (r){
            if (r == 1) {
                alert(mensaje_si);
                $('#tabla').load('../vista/componentes/vista_empresa.php');
            } else {
                alert(mensaje_no);
            }
        }
    });
}
