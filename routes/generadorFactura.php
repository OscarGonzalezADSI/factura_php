<?php
include "../controlador/Factura.php";
include "../vista/factura_v3.php";

function generarFactura(){
	$id_factura = $_POST['id_factura'];
	$controllerFactura = new ControllerFactura();
    $data = $controllerFactura->miFactura($id_factura);
    $viewfactura = new MiFactura();
    $viewfactura->generarFacturaPDF($data);
}

generarFactura();
