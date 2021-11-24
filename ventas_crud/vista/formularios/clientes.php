<!-- MODAL PARA INSERTAR REGISTROS -->
<div class="modal fade" id="modalNuevoCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                <span aria-hidden="true">&times;</span>
                </button>
				<h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
            </div>
            <div class="modal-body">
                <label for="nombre">nombre</label>
                <input type="text" id="nombre" class="form-control input-sm" required="">
                <label for="nitCli">nit</label>
                <input type="text" id="nitCli" class="form-control input-sm" required="">
                <label for="direccionCli">direccion</label>
                <input type="text" id="direccionCli" class="form-control input-sm" required="">
                <label for="telefonoCli">telefono</label>
                <input type="number" id="telefonoCli" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="clienteRegistrar">
                    Agregar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL PARA EDICION DE DATOS-->
<div class="modal fade" id="modalEdicionCliente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Actualizar cliente:</h4>
            </div>
            <div class="modal-body">
                <input type="number" hidden="" id="id_clienteu">
                <label for="nombreu">nombre</label>
                <input type="text" id="nombreu" class="form-control input-sm" required="">
                <label for="nitCliu">nit</label>
                <input type="text" id="nitCliu" class="form-control input-sm" required="">
                <label for="direccionCliu">direccion</label>
                <input type="text" id="direccionCliu" class="form-control input-sm" required="">
                <label for="telefonoCliu">telefono</label>
                <input type="text" id="telefonoCliu" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="clienteModificar">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>
