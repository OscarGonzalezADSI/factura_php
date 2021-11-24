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
    </head>
    <body id="body">
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
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tablaEmpresa').load('componentes/vista_empresa.php');
		$('#tablaCliente').load('componentes/vista_clientes.php');
		$('#tablaFactura').load('componentes/vista_factura.php');
		$('#tablaDetalle').load('componentes/vista_detalle.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
			$('#empresaRegistrar').click(function () {
				let empresa = $('#empresa').val();
				let nit = $('#nit').val();
				let direccion = $('#direccion').val();
				let telefono = $('#telefono').val();
				let ciudad = $('#ciudad').val();
				let correo = $('#correo').val();
				empresaRegistrar(empresa, nit, direccion, telefono, ciudad, correo);
			});
			$('#empresaModificar').click(function () {
				empresaModificar();
			});
			$('#clienteRegistrar').click(function () {
				nombre = $('#nombre').val();
				nit = $('#nitCli').val();
				direccion = $('#direccionCli').val();
				telefono = $('#telefonoCli').val();
				clienteRegistrar(nombre, nit, direccion, telefono);
			});
			$('#clienteModificar').click(function () {
				clienteModificar();
			});
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
