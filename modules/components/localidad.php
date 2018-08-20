<?php
require('../../config/conexion.php');
$query2 = $_GET['query2'];
$sql2 = "SELECT * FROM secciones_electorales WHERE nombre_localidad LIKE '%".$query2."%' ORDER BY rand() LIMIT 20";
$resultset = mysqli_query($koneksidb, $sql2) or die("database error:". mysqli_error($koneksidb));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = $rows["nombre_localidad"];
}
echo json_encode($json);

?>