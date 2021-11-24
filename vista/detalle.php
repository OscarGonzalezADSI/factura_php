<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/js/funciones_detalle.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tablaDetalle"></div>
	</div>
	<?php
	include './formularios/detalle.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tablaDetalle').load('componentes/vista_detalle.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#detalleRegistrar').click(function () {
		    factura_id = $('#factura_id').val();
		    cantidad = $('#cantidad').val();
		    descripcion = $('#descripcion').val();
		    precio = $('#precio').val();
		    iva = $('#iva').val();
		    subtotal = $('#subtotal').val();
		    detalleRegistrar(factura_id, cantidad, descripcion, precio, iva, subtotal);
		});
		$('#detalleModificar').click(function () {
		    detalleModificar();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
