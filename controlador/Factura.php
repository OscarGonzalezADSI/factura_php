<?php
include_once '../modelo/listarFactura.php';
include_once '../modelo/listarClientes.php';
include_once '../modelo/listarDetalle.php';

class ControllerFactura{
	
	function miFactura($id_factura){
		$empresa = $this->selectEmpresa();
		$factura = $this->selectFactura($id_factura);
		$cliente = $this->selectCliente($factura);
		$detalle = $this->selectDetalle($factura);
		$data = [
		    'empresa' => $empresa,
		    'factura' => $factura,
			'cliente' => $cliente,
			'detalle' => $detalle
		];
	    return $data;	
	}
	
	function selectEmpresa(){
		$empresa = [
			'id_empresa' => utf8_decode('Oscar González'),
			'empresa' => utf8_decode('Oscar González'),
			'nit' => 'To. ADSI - SENA',
			'direccion' => 'Mz C4 Casa 21 Torcoroma 2',
			'telefono' => '(57) 322-8858439',
			'ciudad' => utf8_decode('Cúcuta - Norte de Santander'),
			'correo' => 'oigonzalezp@gmail.com'
		];
	    return $empresa;	
	}
	
	function selectFactura($id_factura){
		$factura = new Factura();
		$data = $factura->verfacturas();
		foreach($data as $row)
		{
		    if($row['id_factura'] == $id_factura){
				return $row;
			}
		}
        return false;	
	}
	
	function selectDetalle($factura){
		$facturaNumero = $factura['id_factura'];
		$detalle = [
			['1','1','Análisis del problema','250000','19',''],
			['1','1','Diseño del sistema','315000','19',''],
			['1','12','CRUD de tablas','100000','19',''],
			['1','1','Diseño de factura PDF','90000','19',''],
			['1','1','Diseño de informes de ventas','120000','19',''],
			['1','1','Diseño PDF a medida','150000','19',''],
			['36','1','Diseño PDF a medida','150000','19',''],
			['36','1','Diseño PDF a medida','150000','19',''],
			['36','1','Diseño PDF a medida','150000','19',''],
			['36','1','Diseño PDF a medida','150000','19','']
		];
		$detalle = new Detalle();
		$data = $detalle->verDetalles();
		$items = [];
		foreach($data as $row)
		{
		    if($row['factura_id'] == $facturaNumero){
				array_push($items, $row);
			}
		}
	    return $items;	
	}
	
	function selectCliente($factura){
		$nit = $factura['cliente_id'];
		$clientes = new Clientes();
		$data = $clientes->verCliente($nit);
		foreach($data as $row)
		{
		    if($row['nit'] == $nit){
				return $row;
			}
		}
        return false;		
	}
}
