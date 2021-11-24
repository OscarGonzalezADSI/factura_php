<?php
include_once '../../controlador/php/funciones_clientes.php';
?>
<div class="row">
    <br><br><br><br>
    <div>
		<center>
			<h2>clientes</h2>
		</center>
		<button class="btn btn-primary navbar-left"
					   data-toggle="modal"
					   data-target="#modalNuevoCliente">
			Agregar clientes
			<span class="glyphicon glyphicon-plus"></span>
		</button>
	</div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_cliente</th>
            <th>nombre</th>
            <th>nit</th>
            <th>direccion</th>
            <th>telefono</th>
            <th></th>
        </tr>
   </thead>
    <tbody>
    <?php
	$data = verClientes();
	foreach($data as $row){
		$datos = $row['id_cliente'] . "||" .
			$row['nombre'] . "||" .
			$row['nit'] . "||" .
			$row['direccion'] . "||" .
			$row['telefono'];
	?>		
		<tr>
            <td><?php echo $row['id_cliente']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['nit']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicionCliente"
                               onclick="clienteAgregaModificar('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="clienteConfirmaEliminar('<?php echo $row['id_cliente']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>

