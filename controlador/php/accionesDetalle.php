<?php
include "../../modelo/accionesDetalle.php";
date_default_timezone_set("America/Bogota");
$moDetalle = new MoDetalle();
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    if ($accion == 'registrar') {
        $moDetalle->detalleRegistrar($_POST);
    } else if ($accion == 'modificar') {
        $moDetalle->detalleModificar($_POST);
    } else if ($accion == 'eliminar') {
        $moDetalle->detalleEliminar($_POST);
    } else {
        echo 3;
    }
}
