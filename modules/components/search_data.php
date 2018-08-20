<?php
require('../../config/conexion.php');
$query = $_GET['query'];
$sql = "SELECT * FROM estructura WHERE nombre_integrante LIKE '%".$query."%' LIMIT 20";
$resultset = mysqli_query($koneksidb, $sql) or die("database error:". mysqli_error($koneksidb));
$json = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$json[] = $rows["nombre_integrante"];
}
echo json_encode($json);

?>