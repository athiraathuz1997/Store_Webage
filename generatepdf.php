<?php
require('fpdf17/fpdf.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'store');
class PDF extends FPDF
{
  function Header()
    {
      
      $this->SetFont('Helvetica','B',15);
      
      $this->Cell(12);
      
      $this->Cell(100,10,'student',0,1);
      $this->Ln(5);
     }

  function Footer()
    {
      $this->SetXY(-15);
      $this->SetFont('Helvetica','I',10);
      $this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
    }
}

$pdf=new PDF('P','mm','A4');
$pdf->AliasNbpages('{pages}');
$pdf->AddPage();
$pdf->Output();
?>