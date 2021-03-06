<?php
include_once '../../controlador/php/funciones_facturas.php';
?>
<div class="row">
    <br><br><br><br>
    <div>
		<center>
			<h2>factura</h2>
		</center>
	</div>
	<button class="btn btn-primary navbar-left"
				   data-toggle="modal"
				   data-target="#modalNuevoFactura">
		Agregar factura
		<span class="glyphicon glyphicon-plus"></span>
	</button>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_factura</th>
            <th>cliente_id</th>
            <th>facturaFecha</th>
            <th>facturaSubtotal</th>
            <th>facturaIva</th>
            <th>facturaTotal</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
   </thead>
    <tbody>
    <?php
	$data = verFacturas();
	foreach($data as $row){
        $datos = $row['id_factura'] . "||" .
                  $row['cliente_id'] . "||" .
                  $row['facturaFecha'] . "||" .
                  $row['facturaSubtotal'] . "||" .
                  $row['facturaIva'] . "||" .
                  $row['facturaTotal'];
	?>		
		<tr>
            <td><?php echo $row['id_factura']; ?></td>
            <td><?php echo $row['cliente_id']; ?></td>
            <td><?php echo $row['facturaFecha']; ?></td>
            <td><?php echo $row['facturaSubtotal']; ?></td>
            <td><?php echo $row['facturaIva']; ?></td>
            <td><?php echo $row['facturaTotal']; ?></td>
            <td>
				<form method="post" action="../routes/generadorFactura.php">  
				<input type="text" name="id_factura" value="<?php echo $row['id_factura']; ?>" hidden="">
				<button name="submit" class="btn btn-info glyphicon glyphicon-download-alt"></button> 
				</form>
            </td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicionFactura"
                               onclick="facturaAgregaModificar('<?php echo $datos; ?>')">
                </button>
			</td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="facturaConfirmaEliminar('<?php echo $row['id_factura']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
	<button class="btn btn-primary navbar-left"
					   data-toggle="modal"
					   data-target="#modalNuevoFactura">
			Agregar factura
			<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
