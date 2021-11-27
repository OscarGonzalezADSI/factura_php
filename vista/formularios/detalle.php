<!-- MODAL PARA INSERTAR REGISTROS -->
<div class="modal fade" id="modalNuevoDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Agregar Detalle</h4>
            </div>
            <div class="modal-body">
				<input type="number" hidden="" id="factura_id">
                <label for="descripcion">producto</label>
                <input type="text" id="descripcion" class="form-control input-sm" required="">
                <label for="precio">precio</label>
                <input type="text" id="precio" class="form-control input-sm" required="">
                <label for="iva">iva</label>
                <input type="text" id="iva" class="form-control input-sm" required="">
                <label for="cantidad">cantidad</label>
                <input type="text" id="cantidad" class="form-control input-sm" required="">
                <label for="subtotal" hidden="">subtotal</label>
                <input type="text" hidden="" id="subtotal">
            </div>
            <div class="modal-footer">
                <button type="button"
				        class="btn btn-primary"
						data-dismiss="modal"
						id="detalleRegistrar">
                    siguiente
                </button>
				<form method="post" action="../routes/generadorFactura.php">  
				<input type="text" id="id_facturab" name="id_factura" hidden="">
				<button name="submit" class="btn btn-info glyphicon glyphicon-download-alt"></button> 
				</form>
            </div>
        </div>
    </div>
</div>
<!-- MODAL PARA EDICION DE DATOS-->
<div class="modal fade" id="modalEdicionDetalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Actualizar Detalle</h4>
            </div>
            <div class="modal-body">
                <input type="number" hidden="" id="id_detalleu">
                <label for="factura_idu">factura_id</label>
                <input type="number" id="factura_idu" class="form-control input-sm" required="">
                <label for="cantidadu">cantidad</label>
                <input type="text" id="cantidadu" class="form-control input-sm" required="">
                <label for="descripcionu">descripcion</label>
                <input type="text" id="descripcionu" class="form-control input-sm" required="">
                <label for="preciou">precio</label>
                <input type="text" id="preciou" class="form-control input-sm" required="">
                <label for="ivau">iva</label>
                <input type="text" id="ivau" class="form-control input-sm" required="">
                <label for="subtotalu">subtotal</label>
                <input type="text" id="subtotalu" class="form-control input-sm" required="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal" id="detalleModificar">
                    Actualizar
                </button>
            </div>
        </div>
    </div>
</div>
