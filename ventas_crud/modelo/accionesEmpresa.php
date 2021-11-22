<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_empresa = $_POST['id_empresa'];
		$empresa = $_POST['empresa'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ciudad = $_POST['ciudad'];
		$correo = $_POST['correo'];
		$sql = "INSERT INTO empresa(
			id_empresa, empresa, nit, direccion, telefono, ciudad, correo
			)VALUES (?,?,?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_empresa);
		$reg->bindParam(2, $empresa);
		$reg->bindParam(3, $nit);
		$reg->bindParam(4, $direccion);
		$reg->bindParam(5, $telefono);
		$reg->bindParam(6, $ciudad);
		$reg->bindParam(7, $correo);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_empresa = $_POST['id_empresa'];
		$empresa = $_POST['empresa'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$ciudad = $_POST['ciudad'];
		$correo = $_POST['correo'];
		$sql = "UPDATE empresa SET 
			empresa=:empresa,
			nit=:nit,
			direccion=:direccion,
			telefono=:telefono,
			ciudad=:ciudad,
			correo=:correo
			WHERE id_empresa = :id_empresa;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_empresa", $id_empresa);
		$reg->bindParam(":empresa", $empresa);
		$reg->bindParam(":nit", $nit);
		$reg->bindParam(":direccion", $direccion);
		$reg->bindParam(":telefono", $telefono);
		$reg->bindParam(":ciudad", $ciudad);
		$reg->bindParam(":correo", $correo);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_empresa = $_POST['id_empresa'];
		$sql = "DELETE FROM empresa WHERE id_empresa = :id_empresa;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_empresa", $id_empresa);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else {
		echo 2;
	}
} else {
	echo 3;
}
