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
    </head>
    <body id="body">
	<?php
	include 'header.php';
	?>
	<div class="container">
	    <div id="tablaEmpresa"></div>
	</div>
	<?php
	include './formularios/empresa.php';
	?>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tablaEmpresa').load('componentes/vista_empresa.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#empresaRegistrar').click(function () {
		    empresa = $('#empresa').val();
		    nit = $('#nit').val();
		    direccion = $('#direccion').val();
		    telefono = $('#telefono').val();
		    ciudad = $('#ciudad').val();
		    correo = $('#correo').val();
		    empresaRegistrar(empresa, nit, direccion, telefono, ciudad, correo);
		});
		$('#empresaModificar').click(function () {
		    empresaModificar();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
