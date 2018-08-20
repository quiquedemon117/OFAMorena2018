

<?php
require('../../config/conexion.php');
if(isset($_POST['ce']) && !empty($_POST['ce'])){

$clave_elector=$_POST['ce'];

$nombre_archivo = "FORMATO DE PROGRAMA SOCIAL DE: ".$clave_elector.".pdf";
	
$sql="SELECT * FROM estructura WHERE nombre_integrante = '$clave_elector'";

$query = mysqli_query($koneksidb, $sql);

if((mysqli_num_rows($query)) >= 1){

require('../fpdf/draw.php');
include('../barcode/barcode.php');
$pdf = new PDF_Draw();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Image('../../images/logo.png',130,10,-300);
$pdf->SetXY(10,10);
$pdf->SetFont('Times','B', 14);
$pdf->Cell(0,0,$clave_elector);
$pdf->SetFont('Arial','B', 10);
$pdf->SetXY(10,15);
$pdf->Cell(0,0,utf8_decode('Prolongación Libertad S/N CP. 86400'));
$pdf->SetXY(10,20);
$pdf->Cell(0,0,'Colonia Centro');
$pdf->SetXY(10,25);
$pdf->Cell(0,0,'Huimanguillo Tabasco Secc. 693');
$pdf->SetXY(10,45);
$pdf->SetFont('Times','', 12);
$pdf->Multicell(0,5,utf8_decode('En compensación del gran apoyo que le haz brindado al partido, me es grato hacerte saber, que tienes derechos como muchos otros ciudadanos a elegir entre una variedad de apoyos para el desarrollo y progreso de la economia tuya y de tu familia.'));
$pdf->SetXY(10,230);
$pdf->SetFont('Times','B', 16);
$consul = "SELECT id_integrante FROM estructura WHERE nombre_integrante = '".$clave_elector."'";
$query_consul = mysqli_query($koneksidb, $consul);
$rowsy = mysqli_fetch_array($query_consul);
$string_int = (int) $rowsy['id_integrante'];
$cal = 100000-$string_int;
$pdf->Cell(0,0, "ID:".$cal);
$style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => '10, 20, 5, 10', 'phase' => 10, 'color' => array(255, 0, 0));
$style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 0, 0));
$style3 = array('width' => 1, 'cap' => 'round', 'join' => 'round', 'dash' => '2, 10', 'color' => array(255, 0, 0));
$style4 = array('L' => 0, 
                'T' => array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '20, 10', 'phase' => 10, 'color' => array(100, 100, 255)), 
                'R' => array('width' => 0.50, 'cap' => 'round', 'join' => 'miter', 'dash' => 0, 'color' => array(50, 50, 127)), 
                'B' => array('width' => 0.75, 'cap' => 'square', 'join' => 'miter', 'dash' => '30, 10, 5, 10'));
$style5 = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
$style6 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => '10, 10', 'color' => array(0, 255, 0));
$style7 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(200, 200, 0));

// Line
//$pdf->Line(5, 10, 80, 30, $style);
//$pdf->Line(5, 10, 5, 30, $style2);
$pdf->Line(0, 235, 210, 235, $style3);

$pdf->SetAutoPageBreak(true, 20);

$consul2 = "SELECT id_integrante FROM estructura WHERE nombre_integrante = '".$clave_elector."'";
$query_consul2 = mysqli_query($koneksidb, $consul2);

$y = $pdf->GetY();
	while ($rowa = mysqli_fetch_array($query_consul2)){

		$string_int = (int) $rowa['id_integrante'];
		
		$code = 100000-$string_int;

		barcode('../barcode/codigos/'.$code.'.png', $code, 20, 'horizontal', 'code128', true);
		
		$pdf->Image('../barcode/codigos/'.$code.'.png',150,$y+10,50,0,'PNG');
		
		$y = $y+15;
	}

	$pdf->Output($nombre_archivo, 'I');
	header ("Content-Type: application/download"); 
	header ("Content-Disposition: attachment; filename=$nombre_archivo");
	header("Content-Length: " . filesize("$nombre_archivo"));
	}else{
		echo "<script> alert('La persona que ingreso no esta afiliada');  location.href='../	model.php?open=folios';</script>";
	}


}else{
	echo"<script>alert('El campo de Clave de elector es obligatorio')</script>";
}