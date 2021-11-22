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
			<label>id_factura</label>
			<input type="number" id="id_factura" class="form-control input-sm" required="">
			<label>cliente_id</label>
			<input type="number" id="cliente_id" class="form-control input-sm" required="">
			<label>facturaFecha</label>
			<input type="date" id="facturaFecha" class="form-control input-sm" required="">
			<label>facturaSubtotal</label>
			<textarea id="facturaSubtotal" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>facturaIva</label>
			<textarea id="facturaIva" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>facturaTotal</label>
			<textarea id="facturaTotal" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
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
			<input type="number" hidden="" id="id_facturau">
			<label>cliente_id</label>
			<input type="number" id="cliente_idu" class="form-control input-sm" required="">
			<label>facturaFecha</label>
			<input type="date" id="facturaFechau" class="form-control input-sm" required="">
			<label>facturaSubtotal</label>
			<textarea id="facturaSubtotalu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>facturaIva</label>
			<textarea id="facturaIvau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>facturaTotal</label>
			<textarea id="facturaTotalu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
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
		$('#tabla').load('componentes/vista_factura.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_factura = $('#id_factura').val();
		    cliente_id = $('#cliente_id').val();
		    facturaFecha = $('#facturaFecha').val();
		    facturaSubtotal = $('#facturaSubtotal').val();
		    facturaIva = $('#facturaIva').val();
		    facturaTotal = $('#facturaTotal').val();
		    agregardatos(id_factura, cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal);
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
