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
	    <div id="tabla"></div>
	</div>
	<!-- MODAL PARA INSERTAR REGISTROS -->
	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
		    </div>
		    <div class="modal-body">
			<label>id_detalle</label>
			<input type="number" id="id_detalle" class="form-control input-sm" required="">
			<label>factura_id</label>
			<input type="number" id="factura_id" class="form-control input-sm" required="">
			<label>cantidad</label>
			<textarea id="cantidad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>descripcion</label>
			<textarea id="descripcion" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>precio</label>
			<textarea id="precio" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>iva</label>
			<textarea id="iva" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>subtotal</label>
			<textarea id="subtotal" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">
			    Agregar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<!-- MODAL PARA EDICION DE DATOS-->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
		    <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
		    </div>
		    <div class="modal-body">
			<input type="number" hidden="" id="id_detalleu">
			<label>factura_id</label>
			<input type="number" id="factura_idu" class="form-control input-sm" required="">
			<label>cantidad</label>
			<textarea id="cantidadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>descripcion</label>
			<textarea id="descripcionu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>precio</label>
			<textarea id="preciou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>iva</label>
			<textarea id="ivau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>subtotal</label>
			<textarea id="subtotalu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			</div>
		    <div class="modal-footer">
			<button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizadatos">
			    Actualizar
			</button>
		    </div>
		</div>
	    </div>
	</div>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#tabla').load('componentes/vista_detalle.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_detalle = $('#id_detalle').val();
		    factura_id = $('#factura_id').val();
		    cantidad = $('#cantidad').val();
		    descripcion = $('#descripcion').val();
		    precio = $('#precio').val();
		    iva = $('#iva').val();
		    subtotal = $('#subtotal').val();
		    agregardatos(id_detalle, factura_id, cantidad, descripcion, precio, iva, subtotal);
		});
		$('#actualizadatos').click(function () {
		    modificarCliente();
		});
	    });
	</script>
	<?php
	include './footer.php';
	?>
    </body>
</html>
