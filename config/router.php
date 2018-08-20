<?php

if(isset($_GET['open'])) {
	switch($_GET['open']){
			case '':
				if(!file_exists ("../modules/main.php")) die ("¡Página principal vacía!");
				include "main.php"; 
			break;

			#log
			case 'login_encrypt' :
				if(!file_exists ("../log/login.php")) die ("¡Lo siento pagina vacia!");
				include "../log/login.php"; 
			break;

			#base de datos de secciones electorales
			case 'datos_secciones' :
				if(!file_exists ("../modules/queries/electoral_sections.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/queries/electoral_sections.php"; 
			break;

			case 'seccion_localidad' :
				if(!file_exists ("../modules/components/secc_localidad.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/components/secc_localidad.php"; 
			break;

			#generador de folios
			case 'folios' :
				if(!file_exists ("../modules/generador de folios.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/generador de folios.php"; 
			break;

			case 'programa_social' :
				if(!file_exists ("../modules/components/programa_social.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/components/programa_social.php"; 
			break;

			#registros
			case 'contable' :
				if(!file_exists ("../modules/contable.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/contable.php"; 
			break;

			case 'reg_contable' :
				if(!file_exists ("../modules/components/registro_contable.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/components/registro_contable.php"; 
			break;

			case 'convencidos' :
				if(!file_exists ("../modules/reg_convencidos.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/reg_convencidos.php"; 
			break;

			case 'reporte_convencidos' :
				if(!file_exists ("../modules/queries/reporte_convencidos.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/queries/reporte_convencidos.php"; 
			break;

			case 'link_cord' :
				if(!file_exists ("../modules/queries/link_cord.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/queries/link_cord.php"; 
			break;

			#folios de programas sociales
			case 'reg_folios' :
				if(!file_exists ("../modules/queries/reg_folios.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/queries/reg_folios.php"; 
			break;

			case 'consulta_folios' :
				if(!file_exists ("../modules/queries/consulta_folios.php")) die ("¡Lo siento pagina vacia!");
				include "../modules/queries/consulta_folios.php"; 
			break;
			

			default:
			if(!file_exists ("../modules/main.php")) die ("Pagina principal vacia!");
				include "main.php";	 
			break;

			
	}	
}else {
	if(!file_exists ("../modules/model.php")) die ("Empty Main Page!");
			include "main.php";	 //break;
}
?>