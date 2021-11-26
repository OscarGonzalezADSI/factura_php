<?php
include_once '../../modelo/listarClientes.php';

function verCliente($data){
	$id_cliente = $data['nitClib'];
	$clientes = new Clientes();
	$data = $clientes->verCliente($id_cliente);
	return $data;
}

function verClientes(){
	$clientes = new Clientes();
	$data = $clientes->verClientes();
	return $data;	
}

function countClientes(){
	$clientes = new Clientes();
	$data = $clientes->countClientes();
	return $data;	
}
