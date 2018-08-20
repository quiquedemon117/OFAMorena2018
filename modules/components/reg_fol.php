<?php
require('../../config/conexion.php');
$user_bitacora = $_POST['user_bitacora'];
$folio = $_POST['folio'];
$nombre1 = $_POST['nombre_fol'];
$ap1 = $_POST['ap_fol'];
$am1 = $_POST['am_fol'];
if($_POST['nombre_fol'] == "" && $_POST['ap_fol'] == "" && $_POST['am_fol'] == ""){}else{$nom_completo1 = $nombre1." ".$ap1." ".$am1."\n";}
if($_POST['ce_fol'] == ""){}else{$ce1 = $_POST['ce_fol']."\n";}
$nombre2 = $_POST['nombre_fol2'];
$ap2 = $_POST['ap_fol2'];
$am2 = $_POST['am_fol2'];
if($_POST['nombre_fol2'] == "" && $_POST['ap_fol2'] == "" && $_POST['am_fol2'] == ""){}else{$nom_completo2 = $nombre2." ".$ap2." ".$am2."\n";}
if($_POST['ce_fol2'] == ""){}else{$ce2 = $_POST['ce_fol2']."\n";}
$nombre3 = $_POST['nombre_fol3'];
$ap3 = $_POST['ap_fol3'];
$am3 = $_POST['am_fol3'];
if($_POST['nombre_fol3'] == "" && $_POST['ap_fol3'] == "" && $_POST['am_fol3'] == ""){}else{$nom_completo3 = $nombre3." ".$ap3." ".$am3."\n";}
if($_POST['ce_fol3'] == ""){}else{$ce3 = $_POST['ce_fol3']."\n";}
$nombre4 = $_POST['nombre_fol4'];
$ap4 = $_POST['ap_fol4'];
$am4 = $_POST['am_fol4'];
if($_POST['nombre_fol4'] == "" && $_POST['ap_fol4'] == "" && $_POST['am_fol4'] == ""){}else{$nom_completo4 = $nombre4." ".$ap4." ".$am4."\n";}
if($_POST['ce_fol4'] == ""){}else{$ce4 = $_POST['ce_fol4']."\n";}
$nombre5 = $_POST['nombre_fol5'];
$ap5 = $_POST['ap_fol5'];
$am5 = $_POST['am_fol5'];
if($_POST['nombre_fol5'] == "" && $_POST['ap_fol5'] == "" && $_POST['am_fol5'] == ""){}else{$nom_completo5 = $nombre5." ".$ap5." ".$am5."\n";}
if($_POST['ce_fol5'] == ""){}else{$ce5 = $_POST['ce_fol5']."\n";}
$nombre6 = $_POST['nombre_fol6'];
$ap6 = $_POST['ap_fol6'];
$am6 = $_POST['am_fol6'];
if($_POST['nombre_fol6'] == "" && $_POST['ap_fol6'] == "" && $_POST['am_fol6'] == ""){}else{$nom_completo6 = $nombre6." ".$ap6." ".$am6."\n";}
if($_POST['ce_fol6'] == ""){}else{$ce6 = $_POST['ce_fol6']."\n";}
$domicilio = $_POST['domicilio_fol'];
$localidad = $_POST['localidad_fol'];
$seccion = $_POST['secc_fol'];
$telefono = $_POST['tel_fol'];
$gestor = $_POST['nom_ges_fol'];


#programas sociales

$p1 = $_POST['becas'];
$p2 = $_POST['65_y_mas'];
$p3 = $_POST['apoyo_a_la_vivienda'];
$p4 = $_POST['apoyo_al_campo'];
$p5 = $_POST['despensa'];
$p6 = $_POST['vale_de_gas'];
$p7 = $_POST['vale_para_uniformes'];
$p8 = $_POST['otros'];

$sql = "INSERT INTO folios_pg VALUES ('$folio','".$nom_completo1.$nom_completo2.$nom_completo3.$nom_completo4.$nom_completo5.$nom_completo6."','".$ce1.$ce2.$ce3.$ce4.$ce5.$ce6."','".$domicilio."','".$localidad."', '".$seccion."', '".$telefono."', '".$gestor."', '".$p1."', '".$p2."', '".$p3."', '".$p4."', '".$p5."', '".$p6."', '".$p7."', '".$p8."')";
$query = mysqli_query($koneksidb, $sql);

$consul_numero_folios = "SELECT folio FROM folios_pg";

$consul_query = mysqli_query($koneksidb, $consul_numero_folios);

$contador = mysqli_num_rows($consul_query);

if($query == true){
  $date = new DateTime();
  $dateFormat = date_format($date, 'd/m/Y');
  $horaFormat = date_format($date, 'H:i:s');
  $sql_bitacora = "INSERT INTO bitacora_registro VALUES ('', '".$user_bitacora."', '".$folio."', '".$dateFormat."', '".$horaFormat."')";
  mysqli_query($koneksidb, $sql_bitacora);


	echo "<script>
	
	swal({
  title: 'Informacion registrada Correctamente ',
  text: 'No. de Folios registrados: ".$contador."',
  type: 'success',
  confirmButtonColor: '#329729',
  confirmButtonText: 'Ingresar nuevo registro'
},
function(){
  $('#form_fol')[0].reset();
});
	</script>";
}else{
	echo "<script>
	swal({
  title: 'Error',
  text: 'El numero de folio ya esta registrado',
  type: 'error',
  confirmButtonColor: '#8F0E10',
  confirmButtonText: 'OK'
},
function(){
  $('#form_fol')[0].reset();
});
	</script>";
}
?>