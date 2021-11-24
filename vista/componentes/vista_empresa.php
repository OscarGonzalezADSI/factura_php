<?php
include_once '../../controlador/php/funciones_empresa.php';
?>
<div class="row">
    <br><br><br><br>
    <div>
		<center>
			<h2>empresa</h2>
		</center>
		<button class="btn btn-primary navbar-left"
					   data-toggle="modal"
					   data-target="#modalNuevoEmpresa">
			Agregar empresa
			<span class="glyphicon glyphicon-plus"></span>
		</button>
	</div>
    <table class="table table-hover table-condensed table-bordered table-responsive">
    <thead>
        <tr>
            <th>id_empresa</th>
            <th>empresa</th>
            <th>nit</th>
            <th>direccion</th>
            <th>telefono</th>
            <th>ciudad</th>
            <th>correo</th>
            <th></th>
        </tr>
   </thead>
    <tbody>
    <?php
	$data = verEmpresas();
	foreach($data as $row){
        $datos = $row['id_empresa'] . "||" .
                  $row['empresa'] . "||" .
                  $row['nit'] . "||" .
                  $row['direccion'] . "||" .
                  $row['telefono'] . "||" .
                  $row['ciudad'] . "||" .
                  $row['correo'];
	?>		
		<tr>
            <td><?php echo $row['id_empresa']; ?></td>
            <td><?php echo $row['empresa']; ?></td>
            <td><?php echo $row['nit']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['ciudad']; ?></td>
            <td><?php echo $row['correo']; ?></td>
            <td>
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                               data-toggle="modal"
                               data-target="#modalEdicionEmpresa"
                               onclick="empresaAgregaModificar('<?php echo $datos; ?>')">
                </button></td>
            <td>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                           onclick="empresaConfirmaEliminar('<?php echo $row['id_empresa']; ?>')">
                </button>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
</div>
