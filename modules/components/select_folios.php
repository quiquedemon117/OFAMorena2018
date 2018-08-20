<?php
require('../../config/conexion.php');
$dato = $_POST['dato'];
$dato_consulta = $_POST['opt'];

$sql="SELECT * FROM folios_pg WHERE $dato_consulta LIKE '".$dato."'";

$query = mysqli_query($koneksidb, $sql);
if ($row = mysqli_fetch_array($query)){ 
   echo "<div class='table-responsive'><table class='table table-striped table-bordered table-hover table-condensed' border = '1'> \n"; 
   echo "<tr class='titulos' style='background-color: #0e0b3f; font-family: verdana; font-weight:bold;'><td>OPCIONES</td><td>FOLIO</td><td>NOMBRES</td><td>CLAVE DE ELECTOR</td><td>DOMICILIO</td><td>LOCALIDAD</td><td>SECCION</td><td>TELEFONO</td><td>NOMBRE DEL GESTOR</td><td><a title='Becas universitarias'>P1</a></td><td>P2</td><td>P3</td><td>P4</td><td>P5</td><td>P6</td><td>P7</td><td>P8</td></tr> \n"; 
   do { 
      echo "<tr><td><i class='glyphicon glyphicon-pencil'><a href='#'></a></i>
<i class='glyphicon glyphicon-remove'><a href='#'></a></i></td><td>".$row["folio"]."</td><td>".$row["nombres_familiares"]."</td><td>".$row["clave_elector"]."</td><td>".$row["domicilio"]."</td><td>".$row["localidad"]."</td><td>".$row["seccion"]."</td><td>".$row["telefono"]."</td><td>".$row["nom_gestor"]."</td><td>".$row["p1"]."</td><td>".$row["p2"]."</td><td>".$row["p3"]."</td><td>".$row["p4"]."</td><td>".$row["p5"]."</td><td>".$row["p6"]."</td><td>".$row["p7"]."</td><td>".$row["p8"]."</td></tr> \n"; 
      } while ($row = mysqli_fetch_array($query)); 
   echo "</table></div> \n"; 
}else if (mysqli_num_rows($row) < 1){
echo "<center><h1 class='hidden' id='span'>No hay datos</h1></center>";
 }else{
echo '<center><h1 class="hidden" id="span">No hay datos</h1></center>'; 
} 
?>