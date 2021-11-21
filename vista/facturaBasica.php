<?php

require('../pdfs/FormatPDF.php');

$header = ['item', 'Descripcion', 'Cantidad','Vr. Total'];
$data = [
	['1','Vienna','83859','8075'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192'],
	['2','Brussels','30518','10192']
];

$pdf = new FormatPDF();
$pdf->AliasNbPages();
$data1 = $pdf->LoadData('../files/paises.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage('Legal');
$pdf->ImprovedTable($header,$data);
$pdf->totalizacion($header,$data);
$pdf->Output();







































