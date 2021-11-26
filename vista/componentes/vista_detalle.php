<?php
include_once '../../controlador/php/funciones_detalles.php';
?>
<div class="row">
    <br><br><br><br>
    <div>
		<center>
			<h2>detalles</h2>
		</center>
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
		$total = 0;
		$totalImpuestos = 0;
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
				<?php
				$cantidad = $row['cantidad'];
				$precio = $row['precio'];
				$iva = $row['iva'];
				$producto = $cantidad * $precio;
				$impuestos = $producto * $iva / 100;
				$subtotal = $producto + $impuestos;
				$totalImpuestos += $impuestos;
				$total += $subtotal;			
				?>
				<td><?php echo $subtotal; ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil"
								   data-toggle="modal"
								   data-target="#modalEdicionDetalle"
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
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Total Impuestos:</td>
			<td><?php echo $totalImpuestos; ?></td>
			<td>
			<td>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Total:</td>
			<td><?php echo $total; ?></td>
			<td>
			<td>
			</td>
		</tr>
    </tbody>
    </table>
	<button
	   id="registrarDetalle"
	   class="btn btn-primary navbar-left"
	   data-toggle="modal"
	   data-target="#modalNuevoDetalle">
		Agregar detalle
		<span class="glyphicon glyphicon-plus"></span>
	</button>
</div>
