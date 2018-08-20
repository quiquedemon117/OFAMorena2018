<?php
require('../../config/conexion.php');

$folio = $_POST['folio'];

$sql = "SELECT folio FROM folios_pg WHERE folio='".$folio."'";

$query = mysqli_query($koneksidb, $sql);

$contador = mysqli_num_rows($query);

if($folio != ""){
	if($contador == 0){

		}else{
		echo "<script>
			
			swal({
		  title: 'Error',
		  text: 'El folio ya fue registrado intente con otro',
		  type: 'error',
		  confirmButtonColor: '#bf0000',
		  confirmButtonText: 'OK'
		},
		function(){
		  $('#folio').val('');
		});
			</script>";
		}
}
?>

