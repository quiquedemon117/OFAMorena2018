<table class="table table-bordered table-hover" style="text-align: center;">
	<tr id='lol'>
		<td> Nombre </td>
		<td> Cantidad de promovidos entregados </td>
		<td> Fecha de entrega </td>
	</tr>
<?php
$nombre = $_POST['nombre'];
$sql = "SELECT nombre_integrante, promovidos, fecha FROM contables WHERE nombre_integrante='".$nombre."' ORDER BY nombre_integrante ASC";
$query = mysqli_query($koneksidb, $sql) or die ("error : ".mysqli_error($koneksidb));
while($row = mysqli_fetch_array($query)){
	$fecha = $row['fecha'];
	echo "<tr>";
	echo "<td><form method='POST' action='?open=link_cord'><input type='text' class='hidden'><span>".$row['nombre_integrante']."</span></form></td>";
	echo "<td>".$row['promovidos']."</td>";
	echo "<td>".$fecha."</td>";
	$consulta = "SELECT SUM(promovidos) FROM contables WHERE nombre_integrante = '".$row['nombre_integrante']."'";
	$query_consulta = mysqli_query($koneksidb, $consulta) or die ("error : ".mysqli_error($koneksidb));
	$rar = mysqli_fetch_array($query_consulta);
	$contador = "SELECT count(*) FROM contables WHERE nombre_integrante = '".$row['nombre_integrante']."'";
	$query_consulta2 = mysqli_query($koneksidb, $contador);
	$rar2 = mysqli_fetch_array($query_consulta2);
}

$subsql = "SELECT SUM(promovidos) FROM contables WHERE nombre_integrante='".$nombre."'";
$subquery = mysqli_query($koneksidb, $subsql) or die ("error : ".mysqli_error($koneksidb));
$num_rows = mysqli_num_rows($subquery);

?>
</table>
<center><h1><b>Total: <?php $rows = mysqli_fetch_array($subquery); echo $rows['SUM(promovidos)'];?></b></h1></center>