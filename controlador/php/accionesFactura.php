<?php
include "../../modelo/accionesFactura.php";
include "funciones_facturas.php";
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
    } else if ($accion == 'buscar') {
		try {
			$rta = verFactura($_POST);
			if($_POST['id_factura'] == isset($rta[0]['id_factura'])){
				echo true;
			}else{
				echo 0;
			}
		} catch (error) {
			echo 0;
		}
    } else {
        echo 3;
    }
}
