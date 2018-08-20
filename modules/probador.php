<?php
header("Content-Type: text/html; charset=iso-8859-1 ");
require('fpdf/fpdf.php');
 
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();

?>