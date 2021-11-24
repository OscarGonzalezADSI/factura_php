<?php
require_once('../librerias/fpdf/fpdf.php');
require_once('../librerias/qrcode/qrcode.class.php');
require_once('../librerias/pdfs/fusion.php');

class MiFactura{

	function generarFacturaPDF($data){
		$qrcode = new QRcode('your message here', 'H');
		$pdf = new FormatPDF();
		$pdf->dataEmpresa($data);
		$pdf->dataFactura($data);
		$pdf->AliasNbPages();
		$pdf->SetFont('Arial','',14);
		$pdf->AddPage('P', 'Letter', 0);
		$pdf->cliente($data);
		$pdf->detalle($data);
		$pdf->totalizacion();
		$pdf->SetFont('Arial','',10);
		$code='ABCDEFG1234567890AbCdEf';
		$pdf->Code128(50,230,$code,125,20);
		$pdf->SetXY(90,250);
		$pdf->Write(5,$code);
		$qrcode->displayFPDF($pdf, 169, 10, 36);
		$pdf->Output();
	}
}


