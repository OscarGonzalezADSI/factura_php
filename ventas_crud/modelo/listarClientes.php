<?php
require_once 'conexion.php';

class Clientes
{
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function verCliente($id_cliente)
	{
		$arreglo = array();
		$consulta = "SELECT 
			id_cliente,
			nombre,
			nit,
			direccion,
			telefono
			FROM clientes
			WHERE id_cliente = :id_cliente";
		$modules = $this->conexion->prepare($consulta);
		$modules->bindParam(":id_cliente", $id_cliente);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
	
	function verClientes()
	{
		$arreglo = array();
		$consulta = "SELECT 
			id_cliente,
			nombre,
			nit,
			direccion,
			telefono
			FROM clientes;";
		$modules = $this->conexion->prepare($consulta);
		$modules->execute();
		$total = $modules->rowCount();
		if ($total > 0) {
			$i = 0;
			while ($data = $modules->fetch(PDO::FETCH_ASSOC)) {
				$arreglo[$i] = $data;
				$i++;
			}
		}
		return $arreglo;
	}
	
	function countClientes()
	{
		$consulta = "SELECT count(id_cliente) as cant 
			FROM clientes";
		$modules = $this->conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}