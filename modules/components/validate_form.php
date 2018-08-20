<?php
sleep(2);
      if(isset($ce) && !empty($ce)) {
			require('../../config/conexion.php');
			$ce = $_POST['ce'];
            comprobar($ce);
      }else{
      	echo'<script type="text/javascript">$(document).ready(function(){$("#ce").removeClass("payaso");});</script>';
      }
       
      function comprobar($ce) {
       		
            $sql = mysqli_query($koneksidb, "SELECT * FROM user WHERE user = '".$ce."'") or die mysqli_error($koneksidb);
             
            $contar = mysqli_num_rows($sql) or die mysqli_error($koneksidb);
             
            if($contar == 0){
                  echo'<script type="text/javascript">$(document).ready(function(){$("#ce").removeClass("payaso");});</script>';
            }else{
            	echo'<script type="text/javascript">$(document).ready(function(){$("#ce").removeClass("payaso");});</script>';
                  echo "<span style='font-weight:bold;color:red;'>La clave de elector ya existe</span>";
            }
      }     
?>
