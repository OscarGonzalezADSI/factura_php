<?php
include "../../modelo/accionesEmpresa.php";
date_default_timezone_set("America/Bogota");
$moEmpresa = new MoEmpresa();
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    if ($accion == 'registrar') {
        $moEmpresa->empresaRegistrar($_POST);
    } else if ($accion == 'modificar') {
        $moEmpresa->empresaModificar($_POST);
    } else if ($accion == 'eliminar') {
        $moEmpresa->empresaEliminar($_POST);
    } else {
        echo 3;
    }
}
