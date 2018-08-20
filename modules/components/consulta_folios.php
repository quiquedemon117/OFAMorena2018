<?php
function saltoLinea($str) {
  return str_replace(array("\r\n", "\r", "\n"), "<br />", $str);
}  

require('../../config/conexion.php');
$dato = $_POST['dato'];
$dato_folio = $_POST['dato'];
$dato_nom = $_POST['dato'];
$dato_secc = $_POST['dato'];
$x = 0;

$general = mysqli_query($koneksidb, "SELECT * FROM folios_pg");

$contador = mysqli_num_rows($general);

$contadors = (int) $contador;

$paginador = $contadors/25;

$sql="SELECT * FROM folios_pg ORDER BY 'folio' ASC LIMIT $paginador";



$query = mysqli_query($koneksidb, $sql);
if ($row = mysqli_fetch_array($query)){ 
   echo "<div class='table-responsive'><table class='table table-striped table-bordered table-hover table-condensed' border = '1' id='miTablaPersonalizada'> \n"; 
   echo "<tr class='titulos' style='background-color: #0e0b3f; font-family: verdana; font-weight:bold;'><th>OPCIONES</th><th>FOLIO</th><th>NOMBRES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th>CLAVE DE ELECTOR</th><th>DOMICILIO</th><th>LOCALIDAD</th><th>SECCION</th><th>TELEFONO</th><th>NOMBRE DEL GESTOR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th><th><span title='Becas universitarias'>P1</span></th><th>P2</th><th>P3</th><th>P4</th><th>P5</th><th>P6</th><th>P7</th><th>P8</th></tr> \n";

   do { 
      echo "<tr><td><a href='#' id='editar".$x++."'><i class='glyphicon glyphicon-pencil'></i></a>&nbsp;&nbsp;
<a href='#' id='eliminar".$x++."'><i class='glyphicon glyphicon-remove'></i></a>&nbsp;&nbsp;<a href='#' id='ver".$x++."'><i class='glyphicon glyphicon-eye-open'></i></a></td><td>".$row["folio"]."</td><td>".saltoLinea($row["nombres_familiares"])."</td><td>".saltoLinea($row["clave_elector"])."</td><td>".$row["domicilio"]."</td><td>".$row["localidad"]."</td><td>".$row["seccion"]."</td><td>".$row["telefono"]."</td><td>".$row["nom_gestor"]."</td><td>".$row["p1"]."</td><td>".$row["p2"]."</td><td>".$row["p3"]."</td><td>".$row["p4"]."</td><td>".$row["p5"]."</td><td>".$row["p6"]."</td><td>".$row["p7"]."</td><td>".$row["p8"]."</td></tr> \n";
   } while ($row = mysqli_fetch_array($query)); 
   echo "</table></div> \n"; 
}else if (mysqli_num_rows($row) < 1){
echo "<center><h1 class='hidden' id='span'>No hay datos</h1></center>";
 }else{
echo '<center><h1 class="hidden" id="span">No hay datos</h1></center>'; 
} 
?>
<?php    echo '<center><ul class="pagination">'; ?>
<?php   echo '<li><a href="#">&laquo;</a></li>'; ?> 
<?php echo ' <li><a href="#">&raquo;</a></li>'; ?>
<?php echo '</ul></center>'; ?>