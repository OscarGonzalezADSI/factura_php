<?php
include_once '../../modelo/listarDetalle.php';

function verDetalle($id_detalle){
	$detalle = new Detalle();
	$data = $detalle->verDetalle($id_detalle);
	return $data;
}

function verDetalles(){
	$detalle = new Detalle();
	$data = $detalle->verDetalles();
	return $data;
}

function countDetalles(){
	$detalle = new Detalle();
	$data = $detalle->countDetalles();
	return $data;
}
