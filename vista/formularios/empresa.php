<!-- MODAL PARA INSERTAR REGISTROS -->
<div class="modal fade" id="modalNuevoEmpresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Agregar cliente</h4>
            </div>
            <div class="modal-body">
                <label for="empresa">empresa</label>
                <input type="text" id="empresa" class="form-control input-sm" required="">
                <label for="nit">nit</label>
                <input type="text" id="nit" class="form-control input-sm" required="">
                <label for="direccion">direccion</label>
                <input type="text" id="direccion" class="form-control input-sm" required="">
                <label for="telefono">telefono</label>
                <input type="text" id="telefono" class="form-control input-sm" required="">
                <label for="ciudad">ciudad</label>
                <input type="text" id="ciudad" class="form-control input-sm" required="">
                <label for="correo">correo</label>
                <input type="text" id="correo" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="empresaRegistrar">
                    Agregar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL PARA EDICION DE DATOS-->
<div class="modal fade" id="modalEdicionEmpresa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <label for="empresau">empresa</label>
                <input type="text" id="empresau" class="form-control input-sm" required="">
                <label for="nitu">nit</label>
                <input type="text" id="nitu" class="form-control input-sm" required="">
                <label for="direccionu">direccion</label>
                <input type="text" id="direccionu" class="form-control input-sm" required="">
                <label for="telefonou">telefono</label>
                <input type="text" id="telefonou" class="form-control input-sm" required="">
                <label for="ciudadu">ciudad</label>
                <input type="text" id="ciudadu" class="form-control input-sm" required="">
                <label for="correou">correo</label>
                <input type="text" id="correou" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="empresaModificar">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>
