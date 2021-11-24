<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8">
	<title>Clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php
	include('librerias.php');
	?>
	<script src="../controlador/js/funciones_factura.js"></script>
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tablaFactura"></div>
	</div>
	<?php
	include './formularios/factura.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tablaFactura').load('componentes/vista_factura.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#facturaRegistrar').click(function () {
		    cliente_id = $('#cliente_id').val();
		    facturaFecha = $('#facturaFecha').val();
		    facturaSubtotal = $('#facturaSubtotal').val();
		    facturaIva = $('#facturaIva').val();
		    facturaTotal = $('#facturaTotal').val();
		    facturaRegistrar(cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal);
		});
		$('#facturaModificar').click(function () {
		    facturaModificar();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
