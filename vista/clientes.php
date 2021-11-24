<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/js/funciones_clientes.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tablaCliente"></div>
	</div>
	<?php
	include './formularios/clientes.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tablaCliente').load('componentes/vista_clientes.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#clienteRegistrar').click(function () {
		    nombre = $('#nombre').val();
		    nit = $('#nit').val();
		    direccion = $('#direccion').val();
		    telefono = $('#telefono').val();
		    clienteRegistrar(nombre, nit, direccion, telefono);
		});
		$('#clienteModificar').click(function () {
		    clienteModificar();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
