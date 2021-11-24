<?php
include_once '../../controlador/php/funciones_detalles.php';
?>
<div class="row">
    <br><br><br><br>
    <div>
		<center>
			<h2>detalles</h2>
		</center>
		<button class="btn btn-primary navbar-left"
					   data-toggle="modal"
					   data-target="#modalNuevo">
			Agregar detalle
			<span class="glyphicon glyphicon-plus"></span>
		</button>
	</div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_detalle</th>
            <th>factura_id</th>
            <th>cantidad</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>iva</th>
            <th>subtotal</th>
            <th></th>
        </tr>
   </thead>
    <tbody>
    <?php
	$data = verDetalles();
	foreach($data as $row){
	    $datos = $row['id_detalle'] . "||" .
			$row['factura_id'] . "||" .
			$row['cantidad'] . "||" .
			$row['descripcion'] . "||" .
			$row['precio'] . "||" .
			$row['iva'] . "||" .
			$row['subtotal'];
	?>		
		<tr>
            <td><?php echo $row['id_detalle']; ?></td>
            <td><?php echo $row['factura_id']; ?></td>
            <td><?php echo $row['cantidad']; ?></td>
            <td><?php echo $row['descripcion']; ?></td>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['iva']; ?></td>
            <td><?php echo $row['subtotal']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicion"
                               onclick="detalleAgregaModificar('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="detalleConfirmaEliminar('<?php echo $row['id_detalle']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
