<?php
include_once('../../config/ses_admin.php');
$baris = 400;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$secc = $_POST['secc'];
$local = $_POST['local'];

if($local == ""){
$sql = "SELECT * FROM secciones_electorales WHERE nombre_localidad LIKE '".$local."%' AND n_secc= '".$secc."%' ORDER BY nombre_localidad ASC LIMIT $hal, $baris;";
}else if($secc == ""){
$sql = "SELECT * FROM secciones_electorales WHERE nombre_localidad LIKE '".$local."%' OR n_secc= '".$secc."%' ORDER BY nombre_localidad ASC LIMIT $hal, $baris;";
}else if($local == "" && $secc == ""){
$sql = "SELECT * FROM secciones_electorales ORDER BY nombre_localidad ASC LIMIT $hal, $baris;";
}

$query = mysqli_query($koneksidb, $sql);
$jumlah  = mysqli_num_rows($query);
$maksData= ceil($jumlah/$baris);
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
 <ul class="pagination">
  	<?php echo '<li><a href="?open=seccion_localidad&hal=0">&laquo;</a></li>'; ?>
      <?php
  for ($h = 1; $h <= $maksData; $h++) {
    $list[$h] = $baris * $h - $baris;
    ?>
    <?php
		echo "<li><a href='?open=seccion_localidad&hal=$list[$h]'>$h</a></li>";
	}
	?>
	<?php echo '<li><a href="?open=seccion_localidad&hal=320">&raquo;</a></li>'; ?>
  </ul>
</table>
</div>
  <script type="text/javascript">
$( document ).ready(function() {
  $('#buscar_localidad').typeahead({
    source: function (query, process) {
    return $.get('localidad.php', { query: query }, function (data) {
    data = $.parseJSON(data);
    return process(data);
    });
  },
  showHintOnFocus:'all'
  });
});
</script>