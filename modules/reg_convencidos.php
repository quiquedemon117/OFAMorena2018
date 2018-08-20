<?php 
require('../config/ses_admin.php'); 
?>
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../js/jquery-3.3.1.min.js">
	</head>
	</html>	
<center>
	<h1>Alta de convencidos</h1>
	<h3>Llena los campos siguientes y haz click en el botón INGRESAR</h3>
	<span>NOTA: si haz llenado todos los campos y el boton INGRESAR está desactivado <br> haz click en el botón VERIFICAR DATOS para que el sistema te muestre los errores que encuentre</span>
</center><br>
<div class="row">
	<form method="POST" action="" id="convencidos">
		<div class="col-md-offset-3 col-md-3">
			<label>ENTIDAD DE CAPTURA</label>
			<input class="form-control input-lg" type="text" value="TABASCO" readonly>
		</div>
		<div class="col-md-3">
			<label>ID REFERENTE (OPCIONAL)</label>
			<input class="form-control input-lg" type="text" autocomplete="off">
		</div>
		<div class="col-md-4 form-group" id="nombre">
			<label class="control-label" for="inputSuccess">NOMBRE(S)</label>
			<input class="form-control input-lg" type="text" required id="nom" autocomplete="off">
			<label class="control-label hidden" id="nom_error" for="inputError">El nombre no puede estar vacio</label>
		</div><br>
		<div class="col-md-4 form-group" id="apellido_paterno">
			<label class="control-label" for="inputSuccess">APELLIDO PATERNO</label>
			<input class="form-control input-lg" type="text" required id="ap" autocomplete="off">
			<label class="control-label hidden" id="ap_error" for="inputError">El apellido no puede estar vacio</label>
		</div>
		<div class="col-md-4 form-group" id="apellido_materno">
			<label class="control-label" for="inputSuccess">APELLIDO MATERNO</label>
			<input class="form-control input-lg" type="text" required id="am" autocomplete="off">
			<label class="control-label hidden" id="am_error" for="inputError">El apellido no puede estar vacio</label>
		</div>
		<div class="col-md-offset-2 col-md-4 form-group" id="telefono">
			<label class="control-label" for="inputSuccess">TELEFONO(OPCIONAL)</label>
			<input class="form-control input-lg" type="tel" id="tel" maxlength="10" autocomplete="off">
			<label class="control-label hidden" id="tel_error" for="inputError">Telefono invalido</label>
		</div>
		<div class="col-md-4 form-group" id="clave_elector">
			<label class="control-label" for="inputSuccess">CLAVE DE ELECTOR<span class="label label-danger" id="contador">0</span></label>
			<input class="form-control input-lg" name="ce" type="text" maxlength="18" autocomplete="off" required id="ce" style="color:blue;">
			<label class="control-label hidden" id="ce_error" for="inputError">Clave de elector invalida</label>
			<div id="resultado"></div>
		</div>

		<div class="col-md-12">
			<center><h5>Domicilio</h5></center>
			<div class="col-md-offset-1 col-md-4 form-group" id="calle">
				<label class="control-label" for="inputSuccess">CALLE</label>
				<input class="form-control input-lg" type="text" required id="ca" autocomplete="off">
				<label class="control-label hidden" id="ca_error" for="inputError">La calle no pude estar vacia</label>
			</div>
			<div class="col-md-2">
				<label>NO.EXT.</label>
				<input class="form-control input-lg" type="number" autocomplete="off">
			</div>
			<div class="col-md-2">
				<label>NO.INT.</label>
				<input class="form-control input-lg" type="number" autocomplete="off">
			</div>
			<div class="col-md-2 form-group" id="codigo_postal">
				<label class="control-label" for="inputSuccess">CODIGO POSTAL</label>
				<input class="form-control input-lg" type="number" id="cp" onKeyDown="if(this.value.length==5 && event.keyCode!=8) return false;" autocomplete="off">
				<label class="control-label hidden" id="label-cp-error" for="inputError">Dato invalido</label>
			</div>
		</div>

		<!-- <div class="col-md-12"> -->

			<div class="col-md-offset-1 col-md-4 form-group" id="colonia">
				<br class="visible-md-12">
				<label class="control-label" for="inputSuccess">COLONIA</label>
				<input class="form-control input-lg" type="text" required id="col" autocomplete="off">
				<label class="control-label hidden" id="colonia_error" for="inputError">La colonia no pude estar vacia</label>
			</div>
			<div class="col-md-2 form-group" id="delegacion">
				<label class="control-label" for="inputSuccess">DELEGACIÓN MUNICIPIO</label>
				<input class="form-control input-lg" type="text" required id="del" autocomplete="off">
				<label class="control-label hidden" id="del_error" for="inputError">El municipio no pude estar vacia</label>
			</div>
			<div class="col-md-3 form-group" id="entidad">
				<br class="visible-md-12">
				<label class="control-label" for="inputSuccess">ENTIDAD DOMICILIO</label>
				<input class="form-control input-lg" type="text" required id="ent" autocomplete="off">
				<label class="control-label hidden" id="ent_error" for="inputError">La entidad no puede estar vacia</label>
			</div>
		<!-- </div> -->
			<div class="col-md-offset-5 col-md-2 form-group" id="seccion">
				<label class="control-label" for="inputSuccess">SECCIÓN</label>
				<input class="form-control input-lg" type="number" id="secc" required onKeyDown="if(this.value.length==4 && event.keyCode!=8) return false;" autocomplete="off">
				<label class="control-label hidden" id="label-secc-error" for="inputError">Dato invalido</label>
			</div>
			<div class="col-md-12">
				<center><br><button type="button" class="btn btn-default" id="sas"> VERIFICAR DATOS <i class="glyphicon glyphicon-ok hidden success" style="color:green;" id="ok"></i><i class="glyphicon glyphicon-remove hidden" style="color:red;" id="error"></i></button>&nbsp;&nbsp;<button type="submit" class="btn btn-success" id="enviar" disabled>INGRESAR</button></center>

			</div>
	</form>
</div>
<br>
<br>