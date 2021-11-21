<?php
include "../controlador/Factura.php";
include "../vista/factura_v3.php";

function generarFactura(){
    $controllerFactura = new ControllerFactura();
    $data = $controllerFactura->miFactura('77777');
    $viewfactura = new Factura();
    $viewfactura->generarFacturaPDF($data);
}

generarFactura();
