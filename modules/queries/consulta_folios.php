<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
<form action="" method="POST" id="consulta_folios">
  <div class="col-lg-12">
    <h4 class="text-center">Consulta de folios de Programas sociales</h4>
    <center>
    <div class="radio">
      <label><input type="radio" name="opt" value="folio" checked>Folios &nbsp;&nbsp;&nbsp;</label>
      <label><input type="radio" name="opt" value="nombres_familiares">Nombre del familiar &nbsp;&nbsp;&nbsp;</label>
      <label><input type="radio" name="opt" value="seccion">Seccion Electoral &nbsp;&nbsp;&nbsp;</label>
    </div>
    </center>
    <div class="input-group">
      <input type="text" name="dato" class="form-control" placeholder="Escriba un dato por favor...">
      <span class="input-group-btn">
        <button class="btn btn-success" type="button" id="busqueda_consulta_query">Buscar</button>
      </span>
    </div>
  </div>
  </form>
</div><br>
<div id="resultado_consulta_fol"></div>
</body>
</html>