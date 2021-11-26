<?php
require_once 'conexion.php';

class Empresa
{
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function verEmpresa($id_empresa)
	{
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
			WHERE id_empresa = :id_empresa
			ORDER BY id_empresa DESC;";
		$modules = $this->conexion->prepare($consulta);
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
			ORDER BY id_empresa DESC;";
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
	
	function countEmpresas()
	{
		$consulta = "SELECT count(id_empresa) as cant 
			FROM empresa";
		$modules = $this->conexion->prepare($consulta);
		$modules->execute();
		$data = $modules->fetch(PDO::FETCH_ASSOC);
		$total = 0;
		$total = $data['cant'];
		return $total;
	}
}
