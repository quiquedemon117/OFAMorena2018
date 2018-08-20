<?php

echo "<center>

<h1>Generar folio para Coordinador</h1>
<span class='badge badge-secondary'>Si la persona no trajo convencidos <br> no se podrá generar el Folio de Programa social</span>
<form class='form-inline' method='POST' id='afiliado' action='components/programa_social.php'>
<br><input type='text' class='form-control' name='ce' placeholder='Nombre del coordinador' style='width:300px;' required>
<button class='btn btn-primary'>Buscar</button>
</form></center><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
";

?>
<div id="resultado">
</div>
          <script type="text/javascript">
                $(document).ready(function() {
                  $('#afiliado').submit(function(){
                    alert('No esta afiliado');
                  });
            </script>