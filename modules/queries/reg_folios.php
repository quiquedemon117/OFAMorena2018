<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<!-- <button class="btn btn-danger" style="float:right;">Verificar folios</button><br> -->
		<center><h1>Registros de folios</h1><h4>Datos de los integrantes de la familia:</h4></center>
		<!-- <div class="container"> -->
<!-- 			<div class="inner-addon right-addon">
				<i class="glyphicon glyphicon-remove" style="color:red;"></i>
				<input class="form-control" type="text" name="">
			</div> -->
			<form action="" method="POST" id="form_fol">
				<input class="hidden" type="text" name="user_bitacora" value="<?php echo $_SESSION['USUARIO']; ?>">
				<div class="row">
					<div class="col-md-offset-5 col-md-2" id="div_folio">
					<label class="control-label" for="inputSuccess">Folio:</label>
					 <div class="inner-addon right-addon" id="div_fol_error">
					 	<div id="icon_validar"></div>
					<input type="text" class="form-control" name="folio" id="folio" data-toggle="tooltip" title="">
					 </div>
					</div>
				</div>

				<div class="col-md-3 form-group" id="div_nom">
				<label class="control-label" for="inputSuccess">Nombre (Jefe de la familia):</label>
				<div class="inner-addon right-addon" id="div_fol_error">
				<div id="icon_validar_nom"></div>
				<input type="text" class="form-control" name="nombre_fol" id="nombre_fol">
				</div>
				</div>

				<div class="col-md-3 form-group" id="div_ap">
				<label class="control-label" for="inputSuccess">Apellido Paterno:</label>
				<div class="inner-addon right-addon" id="div_fol_error">
				<div id="icon_validar_ap"></div>
				<input type="text" class="form-control" name="ap_fol" id="ap_fol">
				</div>
				</div>

				<div class="col-md-3 form-group" id="div_am">
				<label class="control-label" for="inputSuccess">Apellido Materno:</label>
				<div class="inner-addon right-addon" id="div_fol_error">
				<div id="icon_validar_am"></div>
				<input type="text" class="form-control" name="am_fol" id="am_fol">
				</div>
				</div>

				<div class="col-md-3 form-group" id="div_ce">
				<label class="control-label" for="inputSuccess">Clave de elector:<span class="label label-danger" id="contador_fol">0</span></label></label>
				<div class="inner-addon right-addon" id="div_fol_error"><div id="icon_validar_ce"></div>
				<input type="text" class="form-control" name="ce_fol" id="ce_fol" title="">
				</div>
				</div>

				<div id="fol_result"></div>
				<center><button type="button" class="btn btn-primary" id="plus"><i class="glyphicon glyphicon-plus"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-danger" id="plus2"><i class="glyphicon glyphicon-minus"></i></button></center>

				<div class="col-md-6 form-group">
				<label class="control-label" for="inputSuccess">Domicilio (Calle y Numero):</label>
				<input type="text" class="form-control" name="domicilio_fol">
				</div>

				<div class="col-md-6 form-group">
				<label class="control-label" for="inputSuccess">Localidad (Colonia, Ejido, Fraccionamiento o Rancheria)</label>
				<input type="text" class="form-control" name="localidad_fol">
				</div>

				<div class="col-md-offset-2 col-md-2 form-group" id="div_secc">
				<label class="control-label" for="inputSuccess">Sección Electoral</label>
				<div class="inner-addon right-addon" id="div_fol_error">
				<div id="icon_validar_secc"></div>
				<input type="text" class="form-control" name="secc_fol" id="secc_fol">
				</div>
				</div>

				<div class="col-md-2 form-group">
				<label class="control-label" for="inputSuccess">Telefono</label>
				<input type="text" class="form-control" name="tel_fol" id="tel_fol">
				</div>

				<div class="col-md-4 form-group" id="div_gestor">
				<label class="control-label" for="inputSuccess">Nombre del gestor</label>
				<div class="inner-addon right-addon" id="div_fol_error">
				<div id="icon_validar_gestor"></div>
				<input type="text" class="form-control" name="nom_ges_fol" id="nom_ges_fol">
				</div>
				</div>

				<div class="col-md-12">
					<center><h4>Beneficios sociales:</h4><input class="hidden" type="text" id="cantidad" value="3"></center>
				</div>

				<div class="col-md-4 form-group">
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita1" value="becas" aria-label="..." name="becas">Becas
  					</label>
				</div>
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita2" value="65_y_mas" aria-label="..." name="65_y_mas">65 y Mas
  					</label>
				</div>
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita3" value="apoyo_a_la_vivienda" aria-label="..." name="apoyo_a_la_vivienda">Apoyo a la Vivienda
  					</label>
				</div>
				</div>

				<div class="col-md-4 form-group">
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita4" value="apoyo_al_campo" aria-label="..." name="apoyo_al_campo">Apoyo al Campo
  					</label>
				</div>
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita5" value="despensa" aria-label="..." name="despensa">Despensa
  					</label>
				</div>
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita6" value="vale_de_gas" aria-label="..." name="vale_de_gas">Vale de Gas
  					</label>
				</div>
				</div>

				<div class="col-md-4 form-group">
					<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" id="palomita7" value="vale_para_uniformes" aria-label="..." name="vale_para_uniformes">Vale para Uniformes
  					</label>
				</div>
				<div class="form-check">
  					<label class="form-check-label">
    				<input class="form-check-input" type="checkbox" value="despensa" aria-label="..." id="cotros">Otros
  					</label>
  					<input type="text" name="otros" id="otros" class="form-control hidden">
				</div>
				</div>				
				</div>
				<div class="col-md-12">
					<center><button type="button" class="btn btn-primary" id="btn-verificar">Verificar Datos</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="ingresar_fol" class="btn btn-success" disabled>Ingresar</button></center><br><br><br>
				</div>
			</form>
			<div id="resultado_fol"></div>
		<!-- </div> -->
</body>
</html>
<script type="text/javascript">
	$()
</script>