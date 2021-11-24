<?php
include_once '../../modelo/listarEmpresa.php';

function verEmpresa($id_empresa){
	$empresa = new Empresa();
	$data = $empresa->verEmpresa($id_empresa);
	return $data;	
}

function verEmpresas(){
	$empresa = new Empresa();
	$data = $empresa->verEmpresas();
	return $data;	
}

function countEmpresas(){
	$empresa = new Empresa();
	$data = $empresa->countEmpresas();
	return $data;	
}
