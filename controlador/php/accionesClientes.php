<?php
include "../../modelo/accionesClientes.php";
include "funciones_clientes.php";
date_default_timezone_set("America/Bogota");
$moClientes = new MoClientes();
if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
    if ($accion == 'registrar') {
        $moClientes->clienteRegistrar($_POST);
    } else if ($accion == 'modificar') {
        $moClientes->clienteModificar($_POST);
    } else if ($accion == 'eliminar') {
        $moClientes->clienteEliminar($_POST);
    } else if ($accion == 'buscar') {
		try {
			$rta = verCliente($_POST);
			if($_POST['nitClib'] == isset($rta[0]['nit'])){
				echo true;
			}else{
				echo 0;
			}
		} catch (error) {
			echo 0;
		}
    } else {
        echo 3;
    }
}
