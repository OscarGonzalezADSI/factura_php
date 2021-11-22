<?php

class Factura
{
	function verfactura($id_factura)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_factura,
			cliente_id,
			facturaFecha,
			facturaSubtotal,
			facturaIva,
			facturaTotal
			FROM factura
			WHERE id_factura = :id_factura";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":id_factura", $id_factura);
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
	function verFacturas()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_factura,
			cliente_id,
			facturaFecha,
			facturaSubtotal,
			facturaIva,
			facturaTotal
			FROM factura;";
		$modules = $conexion->prepare($consulta);
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
	function countFacturas()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$consulta = "SELECT count(id_factura) as cant 
			FROM factura";
		$modules = $conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}
