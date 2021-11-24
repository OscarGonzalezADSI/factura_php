<?php
require_once 'conexion.php';

class MoFactura{
	
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
	function facturaRegistrar($data)
	{
		$cliente_id = $_POST['cliente_id'];
		$facturaFecha = $_POST['facturaFecha'];
		$facturaSubtotal = $_POST['facturaSubtotal'];
		$facturaIva = $_POST['facturaIva'];
		$facturaTotal = $_POST['facturaTotal'];
		$sql = "INSERT INTO factura(
				cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal
				)VALUES (?,?,?,?,?)";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(1, $cliente_id);
		$reg->bindParam(2, $facturaFecha);
		$reg->bindParam(3, $facturaSubtotal);
		$reg->bindParam(4, $facturaIva);
		$reg->bindParam(5, $facturaTotal);
		if($reg->execute() == TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}

	function facturaModificar($data)
	{
		$id_factura = $_POST['id_factura'];
		$cliente_id = $_POST['cliente_id'];
		$facturaFecha = $_POST['facturaFecha'];
		$facturaSubtotal = $_POST['facturaSubtotal'];
		$facturaIva = $_POST['facturaIva'];
		$facturaTotal = $_POST['facturaTotal'];
		$sql = "UPDATE factura SET
				cliente_id= :cliente_id,
				facturaFecha= :facturaFecha,
				facturaSubtotal= :facturaSubtotal,
				facturaIva= :facturaIva,
				facturaTotal= :facturaTotal
				WHERE id_factura = :id_factura;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_factura", $id_factura);
		$reg->bindParam(":cliente_id", $cliente_id);
		$reg->bindParam(":facturaFecha", $facturaFecha);
		$reg->bindParam(":facturaSubtotal", $facturaSubtotal);
		$reg->bindParam(":facturaIva", $facturaIva);
		$reg->bindParam(":facturaTotal", $facturaTotal);
		if($reg->execute() == TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}

	function facturaEliminar($data)
	{
		$id_factura = $_POST['id_factura'];
		$sql = "DELETE FROM factura WHERE id_factura = :id_factura;";
		$reg = $this->conexion->prepare($sql);
		$reg->bindParam(":id_factura", $id_factura);
		if($reg->execute() == TRUE) {
			echo 1;
		}else{
			echo 0;
		}
	}
}
