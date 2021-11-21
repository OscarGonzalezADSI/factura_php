<?php
require_once('../qrcode/qrcode.class.php');
require('../pdfs/fusion.php');

$qrcode = new QRcode('your message here', 'H'); // error level : L, M, Q, H
$header = ['item', 'Descripcion','Precio', 'Cantidad','Vr. Total'];
$data = [
	['1','Vienna','83859','83859','8075'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192'],
	['2','Brussels','30518','83859','10192']
];

$pdf = new FormatPDF();
$pdf->AliasNbPages();
$data1 = $pdf->LoadData('../files/paises.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage('P', 'Letter', 0);
$pdf->ImprovedTable($header,$data);
$pdf->totalizacion($header,$data);
$pdf->SetFont('Arial','',10);
$code='ABCDEFG1234567890AbCdEf';
$pdf->Code128(50,230,$code,125,20);
$pdf->SetXY(90,250);
$pdf->Write(5,$code);
$qrcode->displayFPDF($pdf, 169, 10, 36);
$pdf->Output();