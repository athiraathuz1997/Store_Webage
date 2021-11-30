<?php
//require_once 'dompdf/autoload.inc.php';
// begin collecting output 
ob_start(); 
include 'fgoutward_view.php';
// retrieve output from view.php, stop buffering
$result = ob_get_clean(); 
// filename of the pdf 
$filename = "Result";
// include autoloader
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($result);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
$dompdf->stream($filename);
  ?>