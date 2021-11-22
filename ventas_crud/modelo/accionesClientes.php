<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_cliente = $_POST['id_cliente'];
		$nombre = $_POST['nombre'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$sql = "INSERT INTO clientes(
			id_cliente, nombre, nit, direccion, telefono
			)VALUES (?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_cliente);
		$reg->bindParam(2, $nombre);
		$reg->bindParam(3, $nit);
		$reg->bindParam(4, $direccion);
		$reg->bindParam(5, $telefono);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_cliente = $_POST['id_cliente'];
		$nombre = $_POST['nombre'];
		$nit = $_POST['nit'];
		$direccion = $_POST['direccion'];
		$telefono = $_POST['telefono'];
		$sql = "UPDATE clientes SET 
			nombre= :nombre,
			nit = :nit,
			direccion= :direccion,
			telefono= :telefono
			WHERE id_cliente = :id_cliente;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_cliente", $id_cliente);
		$reg->bindParam(":nombre", $nombre);
		$reg->bindParam(":nit", $nit);
		$reg->bindParam(":direccion", $direccion);
		$reg->bindParam(":telefono", $telefono);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_cliente = $_POST['id_cliente'];
		$sql = "DELETE FROM clientes WHERE id_cliente = :id_cliente;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_cliente", $id_cliente);
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
