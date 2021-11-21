<?php
require('../pdfs/FormatPDF.php');

$pdf = new FormatPDF();
$pdf->AliasNbPages();
$pdf->AddPage('Legal');
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
	$pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
$pdf->Output();
