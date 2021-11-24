<?php
require_once 'conexion.php';

class MoClientes{
	
    function __construct()
	{
		$conexion = new Conexion();
        $this->conexion = $conexion;
    }
	
    function clienteRegistrar($data)
	{
        $nombre = $data['nombre'];
        $nit = $data['nit'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];
        $sql = "INSERT INTO clientes(
                nombre, nit, direccion, telefono
                )VALUES (?,?,?,?)";
        $reg = $this->conexion->prepare($sql);
        $reg->bindParam(1, $nombre);
        $reg->bindParam(2, $nit);
        $reg->bindParam(3, $direccion);
        $reg->bindParam(4, $telefono);
        if ($reg->execute() == TRUE) {
            echo 1;
        }else{
            echo 0;
        }
    }

    function clienteModificar($data)
	{
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
        $reg = $this->conexion->prepare($sql);
        $reg->bindParam(":id_cliente", $id_cliente);
        $reg->bindParam(":nombre", $nombre);
        $reg->bindParam(":nit", $nit);
        $reg->bindParam(":direccion", $direccion);
        $reg->bindParam(":telefono", $telefono);
        if ($reg->execute() === TRUE) {
            echo 1;
        }else{
            echo 0;
        }
    }

    function clienteEliminar($data)
	{
        $id_cliente = $_POST['id_cliente'];
        $sql = "DELETE FROM clientes WHERE id_cliente = :id_cliente;";
        $reg = $this->conexion->prepare($sql);
        $reg->bindParam(":id_cliente", $id_cliente);
        if ($reg->execute() === TRUE) {
            echo 1;
        }else{
            echo 0;
        }
    }
}
