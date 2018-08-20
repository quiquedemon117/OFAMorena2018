<?php
session_start();
include_once "../config/conexion.php";
include_once "../config/librery.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#B5261E" />
	<title>Morena-Huimanguillo</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css.map">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="icon" type="image/png" href="../images/favicons.png" />
  <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.css">
</head>
<body>
	 <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" target="_blank" rel="home" href="https://promueve.morena.si/cgi-bin/index.pl" title="promueve.morena.si">
        <img style="max-width:120px; margin-top: -7px;"
             src="../images/logo-borde_blanco.png">
    </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="../modules/model.php">Home</a></li>
            <li><a href="#about">COTS</a></li>
            <li><a href="?open=convencidos">Convencidos</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros <span class="caret"></span></a>
              <ul class="dropdown-menu" id="color-change">
                <li><a href="?open=reg_folios">Registro de Folios</a></li>
                <li><a href="?open=contable">Registro contable de convencidos</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reportes <span class="caret"></span></a>
              <ul class="dropdown-menu" id="color-change">
                <li><a href="#">COTS</a></li>
                <li><a href="?open=reporte_convencidos">Convencidos</a></li>
                <li><a href="#">Cartas</a></li>
                <li><a href="?open=datos_secciones">Base de datos<br> de Secciones Electorales</a></li>
                <li><a href="?open=folios">Generar folios</a></li>
                <li><a href="?open=consulta_folios">Folios registrados</a></li>
<!--                 <li role="separator" class="divider"></li>
                <li class="dropdown-header" style="color:yellow;">Estructura OFA</li>
                <li><a href="#">Coordinadores</a></li>
                <li><a href="#">Promovidos</a></li> -->
              </ul>
            </li>
          </ul>


          <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="../log/logout.php"><i class="glyphicon glyphicon-off"></i> Cerrar sesion <span class="sr-only">(current)</span></a></li>
          </ul>

                    <ul class="nav navbar-nav navbar-right">
            <li class=""><a href="#"><span style="float: left;">Bienvenido <b><?php echo $_SESSION['USUARIO']; ?></b>&nbsp;&nbsp;&nbsp;</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<br><br><br>
<div class="container">
  <form class="form-inline" method="POST" action="">
  <center><input type="text" class="typeahead form-control" id="buscar" name="buscar" placeholder="Buscar..." style="width: 90%;" autocomplete="off">
  <button class="btn btn-primary">Buscar</button></center>
  </form>
</div>
<hr>

<div class="container"><?php include "../config/router.php";?></div>
 <!-- /container -->

                      
<!--Footer-->
<footer class="page-footer font-small blue pt-4 mt-4">

    <!--Footer Links-->
    <div class="container-fluid text-center text-md-center">
        <div class="row">

            <!--First column-->
            <div class="col-md-12">
                <h5 class="text-uppercase">Soporte tecnico</h5>
                <a href="mailto:ing_lebd@hotmail.com" title="Enviar correo">ing_lebd@hotmail.com</a>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <!-- <div class="col-md-6">
                <h5 class="text-uppercase">Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div> -->
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright <br>
        <a href="http://www.webdevalor.com/"><img src="../images/logo.svg" width="120px"></a>
    </div><br>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
  <script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="../js/jquery.validate.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/sweetalert.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap3-typeahead.min.js"></script>
  <script type="text/javascript" src="../js/validar_campos.js"></script>
  <script type="text/javascript">
$( document ).ready(function() {
  $('#buscar').typeahead({
    source: function (query, process) {
    return $.get('components/search_data.php', { query: query }, function (data) {
    data = $.parseJSON(data);
    return process(data);
    });
  },
  showHintOnFocus:'all'
  });
});
</script>
 <script type="text/javascript">
$( document ).ready(function() {
  $("#buscar_localidad").typeahead({
    source: function (query2, process) {
    return $.get("components/localidad.php", { query2: query2 }, function (data) {
    data = $.parseJSON(data);
    return process(data);
    });
  },
  showHintOnFocus:'all'
  });
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $("#busqueda_consulta").click(function(){
      swal('jajaja');
    });
  });
</script>
</body>
</html>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
  echo '<script>swal({
  title: "Opps",
  text: "No puedes estar aqui",
  type: "error",
  confirmButtonColor: "#B5261E",
  confirmButtonText: "Iniciar Sesion"
},
function(){
  window.location.href="../index.html";
});
</script>';
   /*echo "<center>Esta pagina es solo para usuarios registrados.<br></center>";
   echo "<center><br><a href='../index.html'>Iniciar sesion »</a></center>";*/

exit;
}

$now = time();

?>
