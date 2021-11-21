<?php
class ModelFactura{
	
	function miFactura(){
		$empresa = $this->selectEmpresa();
		$factura = $this->selectFactura();
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
	
	function selectFactura(){
		$factura = [
		    'facturaNumero' => '77777',
		    'clienteId' => '1090384538',
			'facturaFecha' => '2020-04-29',
			'facturaSubtotal' => '500000',
			'facturaIva' => '50000',
			'facturaTotal' => '50000',
		];
	    return $factura;	
	}
	
	function selectDetalle($factura){
		$facturaNumero = $factura['facturaNumero'];
		$detalle = [
			['55555','1','Análisis del problema','250000','19',''],
			['55555','1','Diseño del sistema','315000','19',''],
			['55555','12','CRUD de tablas','100000','19',''],
			['55555','1','Diseño de factura PDF','90000','19',''],
			['55555','1','Diseño de informes de ventas','120000','19',''],
			['55555','1','Diseño PDF a medida','150000','19',''],
			['77777','1','Diseño PDF a medida','150000','19',''],
			['77777','1','Diseño PDF a medida','150000','19',''],
			['77777','1','Diseño PDF a medida','150000','19',''],
			['77777','1','Diseño PDF a medida','150000','19','']
		];
		$data = [];
		foreach($detalle as $row)
		{
		    if($row[0] == $facturaNumero){
				array_push($data, $row);
			}
		}
	    return $data;	
	}
	
	function selectCliente($factura){
		$id_cliente = $factura['clienteId'];
		$clientes = [
			[
				'nombre' => "oscar gonzalez",
				'nit' => '1090384538',
				'direccion' => 'mzC4 torcoroma 2',
				'telefono' => '3228858439'
			]
		];
		foreach($clientes as $row)
		{
		    if($row['nit'] == $id_cliente){
				return $row;
			}
		}
        return false;		
	}
}
