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
			<label>id_empresa</label>
			<input type="number" id="id_empresa" class="form-control input-sm" required="">
			<label>empresa</label>
			<textarea id="empresa" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>nit</label>
			<textarea id="nit" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>direccion</label>
			<textarea id="direccion" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>telefono</label>
			<textarea id="telefono" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>ciudad</label>
			<textarea id="ciudad" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
			<label>correo</label>
			<textarea id="correo" rows="4" cols="50"class="form-control input-sm" required=""></textarea>
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
			<input type="number" hidden="" id="id_empresau">
			<label>empresa</label>
			<textarea id="empresau" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>nit</label>
			<textarea id="nitu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>direccion</label>
			<textarea id="direccionu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>telefono</label>
			<textarea id="telefonou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>ciudad</label>
			<textarea id="ciudadu" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
			<label>correo</label>
			<textarea id="correou" rows="4" cols="50" class="form-control input-sm" required=""></textarea>
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
		$('#tabla').load('componentes/vista_empresa.php');
	    });
	</script>
	<script type="text/javascript">
	    $(document).ready(function () {
		$('#guardarnuevo').click(function () {
		    id_empresa = $('#id_empresa').val();
		    empresa = $('#empresa').val();
		    nit = $('#nit').val();
		    direccion = $('#direccion').val();
		    telefono = $('#telefono').val();
		    ciudad = $('#ciudad').val();
		    correo = $('#correo').val();
		    agregardatos(id_empresa, empresa, nit, direccion, telefono, ciudad, correo);
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
