<?php
include "../../modelo/accionesClientes.php";
date_default_timezone_set("America/Bogota");
$moClientes = new MoClientes();
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    if ($accion == 'registrar') {
        $moClientes->clienteRegistrar($_POST);
    } else if ($accion == 'modificar') {
        $moClientes->clienteModificar($_POST);
    } else if ($accion == 'eliminar') {
        $moClientes->clienteEliminar($_POST);
    } else {
        echo 3;
    }
}
