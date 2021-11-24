<?php
include "../../modelo/accionesFactura.php";
date_default_timezone_set("America/Bogota");
$moFactura = new MoFactura();
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    if ($accion == 'registrar') {
        $moFactura->facturaRegistrar($_POST);
    } else if ($accion == 'modificar') {
        $moFactura->facturaModificar($_POST);
    } else if ($accion == 'eliminar') {
        $moFactura->facturaEliminar($_POST);
    } else {
        echo 3;
    }
}
