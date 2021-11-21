<?php
require_once('../qrcode/qrcode.class.php');
require('../pdfs/fusion.php');

$qrcode = new QRcode('your message here', 'H'); // error level : L, M, Q, H
$header = ['Cant.', 'Descripción','Precio', 'IVA','Total'];
$data = [
        ['1','Análisis del problema','250000','19',''],
        ['1','Diseño del sistema','315000','19',''],
        ['12','CRUD de tablas','100000','19',''],
	['1','Diseño de factura PDF','90000','19',''],
        ['1','Diseño de informes de ventas','120000','19',''],
	['1','Diseño PDF a medida','150000','19','']
];

$cliente = ['Óscar Iván', 'González Peña', 'mzC4 L21 Torcoroma 2', '3228858439'];

$pdf = new FormatPDF();
$pdf->AliasNbPages();
$data1 = $pdf->LoadData('../files/paises.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage('P', 'Letter', 0);
$pdf->cliente($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->totalizacion($header,$data);
$pdf->SetFont('Arial','',10);
$code='ABCDEFG1234567890AbCdEf';
$pdf->Code128(50,230,$code,125,20);
$pdf->SetXY(90,250);
$pdf->Write(5,$code);
$qrcode->displayFPDF($pdf, 169, 10, 36);
$pdf->Output();
