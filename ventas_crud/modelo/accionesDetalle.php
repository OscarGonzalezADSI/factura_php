<?php
date_default_timezone_set("America/Bogota");
require_once 'conexion.php';
$conexion = new Conexion();
if (isset($_GET['accion'])) {
	$accion = $_GET['accion'];
	if ($accion == 'registrar') {
		$id_detalle = $_POST['id_detalle'];
		$factura_id = $_POST['factura_id'];
		$cantidad = $_POST['cantidad'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$iva = $_POST['iva'];
		$subtotal = $_POST['subtotal'];
		$sql = "INSERT INTO detalle(
			id_detalle, factura_id, cantidad, descripcion, precio, iva, subtotal
			)VALUES (?,?,?,?,?,?,?)";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(1, $id_detalle);
		$reg->bindParam(2, $factura_id);
		$reg->bindParam(3, $cantidad);
		$reg->bindParam(4, $descripcion);
		$reg->bindParam(5, $precio);
		$reg->bindParam(6, $iva);
		$reg->bindParam(7, $subtotal);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'modificar') {
		$id_detalle = $_POST['id_detalle'];
		$factura_id = $_POST['factura_id'];
		$cantidad = $_POST['cantidad'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$iva = $_POST['iva'];
		$subtotal = $_POST['subtotal'];
		$sql = "UPDATE detalle SET 
			factura_id=:factura_id,
			cantidad=:cantidad,
			descripcion=:descripcion,
			precio=:precio,
			iva=:iva,
			subtotal=:subtotal
			WHERE id_detalle = :id_detalle;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_detalle", $id_detalle);
		$reg->bindParam(":factura_id", $factura_id);
		$reg->bindParam(":cantidad", $cantidad);
		$reg->bindParam(":descripcion", $descripcion);
		$reg->bindParam(":precio", $precio);
		$reg->bindParam(":iva", $iva);
		$reg->bindParam(":subtotal", $subtotal);
		if ($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	} else if ($accion == 'eliminar') {
		$id_detalle = $_POST['id_detalle'];
		$sql = "DELETE FROM detalle WHERE id_detalle = :id_detalle;";
		$reg = $conexion->prepare($sql);
		$reg->bindParam(":id_detalle", $id_detalle);
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
