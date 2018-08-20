<?php 
require('../config/ses_admin.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../css/sweetalert.css">
  <script type="text/javascript" src="../../js/sweetalert.min.js"></script>
</head>
<body>
<?php 

	$a = $_POST['a'];
	$b = $_POST['b'];
	$e = $_POST['e'];

	$sql = "INSERT INTO contables VALUES ('','$a','*','$b','*','*','*','$e')";
	$query = mysqli_query($koneksidb, $sql) or die ("error : ".mysqli_error($koneksidb));
	if($query == true){
		echo "<script>alert('Se registraron los datos correctamente'); location.href = '?open=contable'</script>";
	}else{
		echo "<script>alert('no se registraron los datos');</script>";
	}

echo "<script>swal('sas gordo');</script>";


?>  
</body>
</html>

