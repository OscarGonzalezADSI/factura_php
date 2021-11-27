window.addEventListener('DOMContentLoaded', (event) => {
	$(document).ready(function () {
		$('#tablaEmpresa').load('componentes/vista_empresa.php');
		$('#tablaCliente').load('componentes/vista_clientes.php');
		$('#tablaFactura').load('componentes/vista_factura.php');
		$('#tablaDetalle').load('componentes/vista_detalle.php');
		$('#empresaRegistrar').click(function () {
			let empresa = $('#empresa').val();
			let nit = $('#nit').val();
			let direccion = $('#direccion').val();
			let telefono = $('#telefono').val();
			let ciudad = $('#ciudad').val();
			let correo = $('#correo').val();
			empresaRegistrar(empresa, nit, direccion, telefono, ciudad, correo);
		});
		$('#empresaModificar').click(function () {
			empresaModificar();
		});
		$('#clienteRegistrar').click(function () {
			nombre = $('#nombre').val();
			nit = $('#nitCli').val();
			direccion = $('#direccionCli').val();
			telefono = $('#telefonoCli').val();
			clienteRegistrar(nombre, nit, direccion, telefono);
		});
		$('#clienteModificar').click(function () {
			clienteModificar();
		});
		$('#facturaRegistrar').click(function () {
			cliente_id = $('#cliente_id').val();
			facturaFecha = $('#facturaFecha').val();
			facturaSubtotal = $('#facturaSubtotal').val();
			facturaIva = $('#facturaIva').val();
			facturaTotal = $('#facturaTotal').val();
			facturaRegistrar(cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal);
		});
		$('#facturaModificar').click(function () {
			facturaModificar();
		});
		$('#detalleRegistrar').click(function () {
			factura_id = $('#factura_id').val();
			$('#id_facturab').val(factura_id);
			cantidad = $('#cantidad').val();
			descripcion = $('#descripcion').val();
			precio = $('#precio').val();
			iva = $('#iva').val();
			subtotal = $('#subtotal').val();
			detalleRegistrar(factura_id, cantidad, descripcion, precio, iva, subtotal);
		});
		$('#detalleModificar').click(function () {
			detalleModificar();
		});
		// logica de usabilidad
		$('#abrirModalFactura').hide();
		$('#abrirModalFactura').click(function () {
			var today = new Date();
			var dd = today.getDate();
			var mm = today.getMonth() + 1; //January is 0!
			var yyyy = today.getFullYear();
			if (dd < 10) {
			  dd = '0' + dd;
			}
			if (mm < 10) {
			  mm = '0' + mm;
			}
			var today = yyyy + '-' + mm + '-' + dd;
			nitClib = $('#nitClib').val();
			alert(nitClib);
			$('#cliente_id').val(nitClib);
		    $('#facturaFecha').val(today);
			cliente_id = $('#cliente_id').val();
			facturaFecha = $('#facturaFecha').val();
			facturaSubtotal = "";
			facturaIva = "";
			facturaTotal = "";
			facturaRegistrar(cliente_id, facturaFecha, facturaSubtotal, facturaIva, facturaTotal);
			facturaBuscar(id_factura);
		});
		$('#clienteBuscar').click(function () {
			nitClib = $('#nitClib').val();
			clienteBuscar(nitClib);
		});
	});
});
