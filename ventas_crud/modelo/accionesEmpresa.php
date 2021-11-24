<?php
require_once 'conexion.php';

class MoEmpresa{
	
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function empresaRegistrar($data)
	{
		$empresa = $_POST['empresa'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ciudad = $_POST['ciudad'];
		$correo = $_POST['correo'];
		$sql = "INSERT INTO empresa(
				empresa, nit, direccion, telefono, ciudad, correo
				)VALUES (?,?,?,?,?,?)";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(1, $empresa);
		$reg->bindParam(2, $nit);
		$reg->bindParam(3, $direccion);
		$reg->bindParam(4, $telefono);
		$reg->bindParam(5, $ciudad);
		$reg->bindParam(6, $correo);
		if($reg->execute() == TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}

	function empresaModificar($data)
	{
		$id_empresa = $_POST['id_empresa'];
		$empresa = $_POST['empresa'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ciudad = $_POST['ciudad'];
		$correo = $_POST['correo'];
		$sql = "UPDATE empresa SET
				empresa = :empresa,
				nit = :nit,
				direccion = :direccion,
				telefono = :telefono,
				ciudad = :ciudad,
				correo = :correo
				WHERE id_empresa = :id_empresa;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_empresa", $id_empresa);
		$reg->bindParam(":empresa", $empresa);
		$reg->bindParam(":nit", $nit);
		$reg->bindParam(":direccion", $direccion);
		$reg->bindParam(":telefono", $telefono);
		$reg->bindParam(":ciudad", $ciudad);
		$reg->bindParam(":correo", $correo);
		if($reg->execute() == TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	}

	function empresaEliminar($data)
	{
		$id_empresa = $_POST['id_empresa'];
		$sql = "DELETE FROM empresa WHERE id_empresa = :id_empresa;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_empresa", $id_empresa);
		if ($reg->execute() == TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}
}
