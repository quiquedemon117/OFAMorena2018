<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
  <script type="text/javascript" src="../js/sweetalert-dev.js"></script>
</head>
<body>
</body>
</html>
<?php
session_start();
if(isset($_POST['user']) && isset($_POST['password'])){
      require('../config/conexion.php');
      $usuario1= $_POST['user'];
      $clave1= $_POST['password'];
      $rs = mysqli_query($koneksidb, "SELECT * FROM user WHERE user='$usuario1' AND password='$clave1'"); 
      $_SESSION['SES_ADMIN'] = $usuario1;
          if (mysqli_num_rows ($rs) > 0) {
          $qr = mysqli_query($koneksidb, "SELECT * FROM user WHERE user='$usuario1' AND password='$clave1'");
          $row = mysqli_fetch_array($qr);
          $_SESSION['ID_USER'] = $row['id'];
          $_SESSION['USUARIO'] = $row['user'];
          $_SESSION['time'] = time();
          $_SESSION['loggedin'] = true;
          $_SESSION['expire'] = $_SESSION['time'] + (30 * 60);
          echo "<script>location.href ='../modules/model.php';</script>";
          exit;
          }else{
		print "<script> swal({
  type: 'error',
  title: 'El usuario y/o contraseña no coinciden',
  showConfirmButton: false,
  timer: 1500
},
function(){
  window.location.href='../index.html';
}) </script>";
}
mysqli_free_result($rs);}
?>