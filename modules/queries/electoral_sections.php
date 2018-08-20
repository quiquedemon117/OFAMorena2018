<?php
include_once('../../config/ses_admin.php');
$baris = 10;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$sql = "SELECT * FROM secciones_electorales";
$query = mysqli_query($koneksidb, $sql) or die ("error : ".mysqli_error($koneksidb));
$jumlah  = mysqli_num_rows($query);
$ultimo = $jumlah-9;
$maksData= ceil($jumlah/$baris);
$secc = $_POST['secc'];
$local = $_POST['local'];
?>
<center>
<div class="container" style="padding: 5px;">
	<form action="?open=seccion_localidad" class="form-inline" method="POST">
		<label>No.Secc.</label><input type="number" name="secc" class="form-control">
		<label>Nombre de localidad</label><input type="text" name="local" class="typeahead form-control" id="buscar_localidad" autocomplete="off">
		<button class="btn btn-primary" type="submit">Buscar</button>
	</form>
</div>
</center>

<div class="table-responsive">
	<table class='table table-bordered table-hover table-sm'>
		<tr id='lol'>
			<th>No. de Sección</th>
			<th>Nombre de la localidad</th>
			<th>Tipo</th>
			<th>Tipo de localidad</th>
			<th>Distrito</th></tr>
<?php			
$sql = "SELECT * FROM secciones_electorales ORDER BY nombre_localidad ASC LIMIT $hal, $baris;";
$query = mysqli_query($koneksidb, $sql);
if($query){
	while($row = mysqli_fetch_array($query)) {
		$nomor++;
		$Kode = $myData['id'];
	?>
		<tr>
			<td><?php echo $row[5] ?></td>
			<td><?php echo $row[1] ?></td>
			<td><?php echo $row[2] ?></td>
			<td><?php echo $row[3] ?></td>
			<td><?php echo $row[4] ?></td>
		</tr>

		<?php
	}
}else{
echo "Algo salio mal";
}
?>
<!-- <nav aria-label="Page navigation example">
 -->
</div>
<div class="table-responsive">
 <table>  
 <ul class="pagination pagination-sm">
  	<?php echo '<li><a id="active" href="?open=datos_secciones&hal=0">&laquo;</a></li>'; ?>
      <?php
  for ($h = 1; $h <= $maksData; $h++) {
    $list[$h] = $baris * $h - $baris;
    ?>
    
		<li id='active'><a id='active' href='?open=datos_secciones&hal=<?php echo $list[$h]; ?>'><?php echo $h; ?></a></li>
	
	<?php } ?>
	<?php echo '<li><a id="active" href="?open=datos_secciones&hal='.$ultimo.'">&raquo;</a></li>'; ?>
  </ul>
</table>
</div>