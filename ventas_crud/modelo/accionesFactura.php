<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_factura = $_POST['id_factura'];
		$cliente_id = $_POST['cliente_id'];
		$facturaFecha = $_POST['facturaFecha'];
		$facturaSubtotal = $_POST['facturaSubtotal'];
		$facturaIva = $_POST['facturaIva'];
		$facturaTotal = $_POST['facturaTotal'];
		$sql = "INSERT INTO factura(
			id_factura, cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal
			)VALUES (?,?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_factura);
		$reg->bindParam(2, $cliente_id);
		$reg->bindParam(3, $facturaFecha);
		$reg->bindParam(4, $facturaSubtotal);
		$reg->bindParam(5, $facturaIva);
		$reg->bindParam(6, $facturaTotal);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_factura = $_POST['id_factura'];
		$cliente_id = $_POST['cliente_id'];
		$facturaFecha = $_POST['facturaFecha'];
		$facturaSubtotal = $_POST['facturaSubtotal'];
		$facturaIva = $_POST['facturaIva'];
		$facturaTotal = $_POST['facturaTotal'];
		$sql = "UPDATE factura SET 
			cliente_id=:cliente_id,
			facturaFecha=:facturaFecha,
			facturaSubtotal=:facturaSubtotal,
			facturaIva=:facturaIva,
			facturaTotal=:facturaTotal
			WHERE id_factura = :id_factura;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_factura", $id_factura);
		$reg->bindParam(":cliente_id", $cliente_id);
		$reg->bindParam(":facturaFecha", $facturaFecha);
		$reg->bindParam(":facturaSubtotal", $facturaSubtotal);
		$reg->bindParam(":facturaIva", $facturaIva);
		$reg->bindParam(":facturaTotal", $facturaTotal);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_factura = $_POST['id_factura'];
		$sql = "DELETE FROM factura WHERE id_factura = :id_factura;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_factura", $id_factura);
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
