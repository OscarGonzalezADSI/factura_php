<?php
require_once 'conexion.php';

class Detalle
{
	function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function verDetalle($id_detalle)
	{
		$arreglo = array();
		$consulta = "SELECT 
			id_detalle,
			factura_id,
			cantidad,
			descripcion,
			precio,
			iva,
			subtotal
			FROM detalle
			WHERE id_detalle = :id_detalle";
		$modules = $this->conexion->prepare($consulta);
		$modules->bindParam(":id_detalle", $id_detalle);
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
	
	function verDetalles()
	{
		$arreglo = array();
		$consulta = "SELECT 
			id_detalle,
			factura_id,
			cantidad,
			descripcion,
			precio,
			iva,
			subtotal
			FROM detalle;";
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
	
	function countDetalles()
	{
		$consulta = "SELECT count(id_detalle) as cant 
			FROM detalle";
		$modules = $this->conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}
