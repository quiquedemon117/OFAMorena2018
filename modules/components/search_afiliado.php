<?php

require('../../config/conexion.php');
$afiliado = $_POST['ce'];
$sql = "SELECT nombre_integrante FROM estructura WHERE nombre_integrante = '$afiliado'";
$query = mysqli_query($koneksidb, $sql);

if($query == false){
	echo '<div class="alert alert-danger alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>¡Error!</strong> Indicates a successful or positive action.
</div>';
}else{
	
}
?>