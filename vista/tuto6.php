<?php
require('../pdfs/FormatPDF.php');
$header = ['Pais','Ciudad','codigo','valor'];
$data = [['Austria','Vienna','83859','8075'],['Belgium','Brussels','30518','10192']];

$pdf = new FormatPDF();
$pdf->AliasNbPages();
$data1 = $pdf->LoadData('../files/paises.txt');
$pdf->SetFont('Arial','',14);
$pdf->AddPage('Legal');
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->ImprovedTable($header,$data);
$pdf->Output();
