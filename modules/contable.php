<form method="POST" action="?open=reg_contable" onsubmit="confirm('¿Esta seguro que quiere registrar los datos?')">
<center><div class="row"><div class="col-md-offset-3 col-md-6"><label>Nombre:</label>
<select class="form-control" name="a" required>
	<option value=""> -- Seleccione un coordinador -- </option>
<?php
$fecha = date("Y-m-d");
include_once('../../config/ses_admin.php');
$sql = "SELECT nombre_integrante FROM estructura;";
$query = mysqli_query($koneksidb, $sql);
while($row = mysqli_fetch_array($query)){
echo "<option value="."'".$row['nombre_integrante']."'>".$row['nombre_integrante']."</option>";
}
?>
</select>
</div>
</div>
<div class="row">
	<div class="col-md-offset-5 col-md-2">
	<label>Promovidos</label>
	<input type="number" class="form-control" name="b" required>
	<label>Fecha</label>
	<input type="date" class="form-control " name="e" value="<?php echo $fecha; ?>" required><br>
	<input class="btn btn-primary" type="submit" value="Registrar">
	</div>
	</form>
</div>
</center>
<br><br>