<?php 

require('fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',18);
$pdf->Cell(40,10,"");
$pdf->Link(100,10,10,10, 'http://localhost/sample/sampleprocedure.php');
$pdf->output();
 ?>