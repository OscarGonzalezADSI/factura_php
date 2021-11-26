<?php
include_once '../../modelo/listarFactura.php';

function verFactura($data){
	$id_factura = $data['id_factura'];
	$factura = new Factura();
	$data = $factura->verfactura($id_factura);
	return $data;
}

function verFacturas(){
	$factura = new Factura();
	$data = $factura->verfacturas();
	return $data;	
}

function countFacturas(){
	$factura = new Factura();
	$data = $factura->countfacturas();
	return $data;	
}
