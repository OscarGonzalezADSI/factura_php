<!-- MODAL PARA INSERTAR REGISTROS -->
<div class="modal fade" id="modalNuevoFactura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Agregar Factura</h4>
            </div>
            <div class="modal-body">
                <label>cliente_id</label>
                <input type="number" id="cliente_id" class="form-control input-sm" required="">
                <label>facturaFecha</label>
                <input type="date" id="facturaFecha" class="form-control input-sm" required="">
                <label>facturaSubtotal</label>
                <input type="text" id="facturaSubtotal" class="form-control input-sm" required="">
                <label>facturaIva</label>
                <input type="text" id="facturaIva" class="form-control input-sm" required="">
                <label>facturaTotal</label>
                <input type="text" id="facturaTotal" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" id="facturaRegistrar">
                    Agregar
                </button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL PARA EDICION DE DATOS-->
<div class="modal fade" id="modalEdicionFactura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Actualizar Factura</h4>
            </div>
            <div class="modal-body">
                <input type="number" hidden="" id="id_facturau">
                <label>cliente_id</label>
                <input type="number" id="cliente_idu" class="form-control input-sm" required="">
                <label>facturaFecha</label>
                <input type="date" id="facturaFechau" class="form-control input-sm" required="">
                <label>facturaSubtotal</label>
                <input type="text" id="facturaSubtotalu" rows="4" cols="50" class="form-control input-sm" required="">
                <label>facturaIva</label>
                <input type="text" id="facturaIvau" rows="4" cols="50" class="form-control input-sm" required="">
                <label>facturaTotal</label>
                <input type="text" id="facturaTotalu" rows="4" cols="50" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="facturaModificar">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>
