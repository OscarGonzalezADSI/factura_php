<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Clientes</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<?php
include('librerias.php');
?>
<script src="../controlador/js/funciones_empresa.js"></script>
<script src="../controlador/js/funciones_clientes.js"></script>
<script src="../controlador/js/funciones_detalle.js"></script>
<script src="../controlador/js/funciones_factura.js"></script>
<script src="../controlador/js/index.js"></script>
</head>
<body>
	<?php
	include 'header.php';
	?>
	<div class="container">
		<div id="tablaEmpresa"></div>
		<div id="tablaCliente"></div>
		<div id="tablaFactura"></div>
		<div id="tablaDetalle"></div>
	</div>
	<?php
	include './formularios/empresa.php';
	include './formularios/detalle.php';
	include './formularios/clientes.php';
	include './formularios/factura.php';
	?>
	<?php
	include './footer.php';
	?>
</body>
</html>
