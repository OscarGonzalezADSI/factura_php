<?php

class Empresa
{
	function verEmpresa($id_empresa)
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_empresa,
			empresa,
			nit,
			direccion,
			telefono,
			ciudad,
			correo
			FROM empresa
			WHERE id_empresa = :id_empresa";
		$modules = $conexion->prepare($consulta);
		$modules->bindParam(":id_empresa", $id_empresa);
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
	function verEmpresas()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$arreglo = array();
		$consulta = "SELECT 
			id_empresa,
			empresa,
			nit,
			direccion,
			telefono,
			ciudad,
			correo
			FROM empresa;";
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
	function countEmpresas()
	{
		require_once 'conexion.php';
		$conexion = new Conexion();
		$consulta = "SELECT count(id_empresa) as cant 
			FROM empresa";
		$modules = $conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}
