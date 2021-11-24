<?php
require_once 'conexion.php';

class MoDetalle{
	
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function detalleRegistrar($data)
	{
		$factura_id = $_POST['factura_id'];
		$cantidad = $_POST['cantidad'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$iva = $_POST['iva'];
		$subtotal = $_POST['subtotal'];
		$sql = "INSERT INTO detalle(
				factura_id, cantidad, descripcion, precio, iva, subtotal
				)VALUES (?,?,?,?,?,?)";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(1, $factura_id);
		$reg->bindParam(2, $cantidad);
		$reg->bindParam(3, $descripcion);
		$reg->bindParam(4, $precio);
		$reg->bindParam(5, $iva);
		$reg->bindParam(6, $subtotal);
		if($reg->execute() == TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	}

	function detalleModificar($data)
	{
		$id_detalle = $_POST['id_detalle'];
		$factura_id = $_POST['factura_id'];
		$cantidad = $_POST['cantidad'];
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];
		$iva = $_POST['iva'];
		$subtotal = $_POST['subtotal'];
		$sql = "UPDATE detalle SET
				factura_id= :factura_id,
				cantidad= :cantidad,
				descripcion= :descripcion,
				precio= :precio,
				iva= :iva,
				subtotal= :subtotal
				WHERE id_detalle = :id_detalle;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_detalle", $id_detalle);
		$reg->bindParam(":factura_id", $factura_id);
		$reg->bindParam(":cantidad", $cantidad);
		$reg->bindParam(":descripcion", $descripcion);
		$reg->bindParam(":precio", $precio);
		$reg->bindParam(":iva", $iva);
		$reg->bindParam(":subtotal", $subtotal);
		if($reg->execute() === TRUE) {
			echo 1;
		} else {
			echo 0;
		}
	}

	function detalleEliminar($data)
	{
		$id_detalle = $_POST['id_detalle'];
		$sql = "DELETE FROM detalle WHERE id_detalle = :id_detalle;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_detalle", $id_detalle);
		if ($reg->execute() === TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}
}
