/*verficación por click en boton*/
$(document).ready(function() {
   $("#sas").click(function(){

         var telefono = $("#tel").val();
         var codigo_postal = $("#cp").val();

   		var secc = $("#secc").val();
   		if (secc == ""){
   			$("#seccion").addClass('has-error');
   			$("#label-secc-error").removeClass('hidden');
   			$("#error").removeClass('hidden');
   		}else{
   			$("#error").addClass('hidden');
   			/*$("#ok").removeClass('hidden');*/
   			$("#seccion").removeClass('has-error');
   			$("#seccion").addClass('has-success');
   			$("#label-secc-error").addClass('hidden');
   		}

   		var clave_elector = $("#ce").val();
   		var re = /^[0-9]+$/;
   		if (re.test(clave_elector)) {
			$("#clave_elector").removeClass('has-error');
			$("#clave_elector").addClass('has-success');
			$("#ce_error").addClass('hidden');
		}
		else {
			$("#clave_elector").addClass('has-error');
			$("#ce_error").removeClass('hidden');
			$("#ce_error").focus();
		}

		if($("#tel").val().length < 10){
   			$("#telefono").addClass('has-error');
			$("#tel_error").removeClass('hidden');
			$("#tel_error").focus();
   		}
   		else{
   			$("#telefono").removeClass('has-error');
   			$("#telefono").addClass('has-success');
			$("#tel_error").addClass('hidden');
			$("#tel_error").focus();
   		}

   		if($("#cp").val().length < 5){
   			$("#cp").attr("maxlength", 5);
   			$("#codigo_postal").addClass('has-error');
			$("#label-cp-error").removeClass('hidden');
			$("#label-cp-error").focus();
   		}
   		else{
   			$("#codigo_postal").removeClass('has-error');
   			$("#codigo_postal").addClass('has-success');
			$("#label-cp-error").addClass('hidden');
			$("#label-cp-error").focus();
   		}

   		var nom = $("#nom").val();
   		if(nom == ""){
   		$("#nombre").addClass('has-error');
			$("#nom_error").removeClass('hidden');
			$("#nom_error").focus();
   		}
   		else{
   		$("#nombre").removeClass('has-error');
   		$("#nombre").addClass('has-success');
			$("#nom_error").addClass('hidden');
			$("#nom_error").focus();
   		}

   		var a_paterno = $("#ap").val();
   		if(a_paterno == ""){
   			$("#apellido_paterno").addClass('has-error');
			$("#ap_error").removeClass('hidden');
			$("#ap_error").focus();
   		}
   		else{
   			$("#apellido_paterno").removeClass('has-error');
   			$("#apellido_paterno").addClass('has-success');
			$("#ap_error").addClass('hidden');
			$("#ap_error").focus();
   		}

   		var entidad = $("#ent").val();
   		if(entidad == ""){
   			$("#entidad").addClass('has-error');
			$("#ent_error").removeClass('hidden');
			$("#ent_error").focus();
   		}
   		else{
   			$("#entidad").removeClass('has-error');
   			$("#entidad").addClass('has-success');
			$("#ent_error").addClass('hidden');
			$("#ent_error").focus();
   		}

   	    var delegacion = $("#del").val();
   		if(delegacion == ""){
   			$("#delegacion").addClass('has-error');
			$("#del_error").removeClass('hidden');
			$("#del_error").focus();
   		}
   		else{
   			$("#delegacion").removeClass('has-error');
   			$("#delegacion").addClass('has-success');
			$("#del_error").addClass('hidden');
			$("#del_error").focus();
   		}

   	    var calle = $("#ca").val();
   		if(calle == ""){
   			$("#calle").addClass('has-error');
			$("#ca_error").removeClass('hidden');
			$("#ca_error").focus();
   		}
   		else{
   			$("#calle").removeClass('has-error');
   			$("#calle").addClass('has-success');
			$("#ca_error").addClass('hidden');
			$("#ca_error").focus();
   		}

   		var colonia = $("#col").val();
   		if(colonia == ""){
   			$("#colonia").addClass('has-error');
			$("#colonia_error").removeClass('hidden');
			$("#colonia_error").focus();
   		}
   		else{
   			$("#colonia").removeClass('has-error');
   			$("#colonia").addClass('has-success');
			$("#colonia_error").addClass('hidden');
			$("#colonia_error").focus();
   		}

   		var a_materno = $("#am").val();
   		if(a_materno == ""){
   			$("#apellido_materno").addClass('has-error');
			$("#am_error").removeClass('hidden');
			$("#am_error").focus();
   		}
   		else{
   			$("#apellido_materno").removeClass('has-error');
   			$("#apellido_materno").addClass('has-success');
			$("#am_error").addClass('hidden');
			$("#am_error").focus();
   		}



         if($("#error").hasClass('hidden')){
            $("#ok").removeClass('hidden')
            $("#enviar").removeAttr('disabled');
         }else{
            swal('Complete los campos obligatorios');
         }



         /*$.ajax({
         var dataString = $('#convencidos').serialize();
                  type: "POST",
                  url: "../modules/components/validate_form.php",
                  data: dataString,
                  error: function(){
                     alert('No funciona esta verga');
                  },
                  success: function(data){                                                      
                   $("#resultado").html(data);
                  }*/

/*   		if($("#nom").val() == ""){
   			swal('Opps!','Los siguientes campos estan vacios: \n *Nombre => SinDato','error');
   			if($("#ap").val() == ""){
   				swal('Opps!','Los siguientes campos estan vacios: \n *Nombre => SinDato \n *Apellido Paterno => SinDato','error');
   			}
   		}*/
   });
});
/*verficación por click en boton*/

/*verficación por cambio de focus*/
$(document).ready(function(){
	$("#secc").blur(function(){
	var secc = $("#secc").val();
	if (secc == ""){
   			$("#seccion").addClass('has-error');
   			$("#label-secc-error").removeClass('hidden');
/*   			$("#error").removeClass('hidden');*/
   		}else{
   			$("#error").addClass('hidden');
/*   			$("#ok").removeClass('hidden');*/
   			$("#seccion").removeClass('has-error');
   			$("#seccion").addClass('has-success');
   			$("#label-secc-error").addClass('hidden');
   		}
   	});

   	$("#ce").blur(function(){
   		var clave_elector = $("#ce").val();
   		var re = /^[0-9]+$/;
   		if (re.test(clave_elector)) {
			$("#clave_elector").removeClass('has-error');
			$("#clave_elector").addClass('has-success');
			$("#ce_error").addClass('hidden');
		}
		else {
			$("#clave_elector").addClass('has-error');
			$("#ce_error").removeClass('hidden');
			$("#ce_error").focus();
		}
   });

   	   $("#tel").blur(function(){
   		if($("#tel").val().length < 10){
   			$("#telefono").addClass('has-error');
			$("#tel_error").removeClass('hidden');
			$("#tel_error").focus();
   		}
   		else{
   			$("#telefono").removeClass('has-error');
   			$("#telefono").addClass('has-success');
			$("#tel_error").addClass('hidden');
			$("#tel_error").focus();
   		}
   		return false;
   });


   	    $("#cp").blur(function(){
   		if($("#cp").val().length < 5){
   			$("#cp").attr("maxlength", 5);
   			$("#codigo_postal").addClass('has-error');
			$("#label-cp-error").removeClass('hidden');
			$("#label-cp-error").focus();
   		}
   		else{
   			$("#codigo_postal").removeClass('has-error');
   			$("#codigo_postal").addClass('has-success');
			$("#label-cp-error").addClass('hidden');
			$("#label-cp-error").focus();
   		}
   });

   	    $("#nom").blur(function(){
   	    var nom = $("#nom").val();
   		if(nom == ""){
   			$("#nombre").addClass('has-error');
			$("#nom_error").removeClass('hidden');
			$("#nom_error").focus();
   		}
   		else{
   			$("#nombre").removeClass('has-error');
   			$("#nombre").addClass('has-success');
			$("#nom_error").addClass('hidden');
   		}

 });

   	    $("#ap").blur(function(){
   	    var a_paterno = $("#ap").val();
   		if(a_paterno == ""){
   			$("#apellido_paterno").addClass('has-error');
			$("#ap_error").removeClass('hidden');
			$("#ap_error").focus();
   		}
   		else{
   			$("#apellido_paterno").removeClass('has-error');
   			$("#apellido_paterno").addClass('has-success');
			$("#ap_error").addClass('hidden');
			$("#ap_error").focus();
   		}

 });

   	    $("#am").blur(function(){
   	    var a_materno = $("#am").val();
   		if(a_materno == ""){
   			$("#apellido_materno").addClass('has-error');
			$("#am_error").removeClass('hidden');
			$("#am_error").focus();
   		}
   		else{
   			$("#apellido_materno").removeClass('has-error');
   			$("#apellido_materno").addClass('has-success');
			$("#am_error").addClass('hidden');
			$("#am_error").focus();
   		}

 });
   	    $("#ca").blur(function(){
   	    var calle = $("#ca").val();
   		if(calle == ""){
   			$("#calle").addClass('has-error');
			$("#ca_error").removeClass('hidden');
			$("#ca_error").focus();
   		}
   		else{
   			$("#calle").removeClass('has-error');
   			$("#calle").addClass('has-success');
			$("#ca_error").addClass('hidden');
			$("#ca_error").focus();
   		}

 });

   	    $("#col").blur(function(){
   	    var colonia = $("#col").val();
   		if(colonia == ""){
   			$("#colonia").addClass('has-error');
			$("#colonia_error").removeClass('hidden');
			$("#colonia_error").focus();
   		}
   		else{
   			$("#colonia").removeClass('has-error');
   			$("#colonia").addClass('has-success');
			$("#colonia_error").addClass('hidden');
			$("#colonia_error").focus();
   		}

 });

   	    $("#del").blur(function(){
   	    var delegacion = $("#del").val();
   		if(delegacion == ""){
   			$("#delegacion").addClass('has-error');
			$("#del_error").removeClass('hidden');
			$("#del_error").focus();
   		}
   		else{
   			$("#delegacion").removeClass('has-error');
   			$("#delegacion").addClass('has-success');
			$("#del_error").addClass('hidden');
			$("#del_error").focus();
   		}

 });

   	    $("#ent").blur(function(){
   	    var entidad = $("#ent").val();
   		if(entidad == ""){
   			$("#entidad").addClass('has-error');
			$("#ent_error").removeClass('hidden');
			$("#ent_error").focus();
   		}
   		else{
   		$("#entidad").removeClass('has-error');
   		$("#entidad").addClass('has-success');
			$("#ent_error").addClass('hidden');
			$("#ent_error").focus();
   		}

 });
});
/*verficación por cambio de focus*/

$(document).ready(function(){
                         
      var consulta;
             
      //hacemos focus
      /*$("#ce").focus();*/
                                                 
      //comprobamos si se pulsa una tecla
      $("#ce").blur(function(e){
             //obtenemos el texto introducido en el campo
             consulta = $("#ce").val();
                                      
             //hace la búsqueda
             $("#resultado").delay(1000).queue(function(n) {      
                                           
                  $("#resultado").html('<script type="text/javascript">$(document).ready(function(){$("#ce").addClass("payaso");});</script>');
                                           
                        $.ajax({
                              type: "POST",
                              url: "../modules/components/validate_form.php",
                              data: "ce="+consulta,
                              dataType: "html",
                              error: function(){
                                    swal("error petición ajax");
                              },
                              success: function(data){                                                      
                                    $("#resultado").html(data);
                              }
                  });
                                           
             });
                                
      });
                          
});

$(document).ready(function(){
   var nextinput = 1;
   $("#plus").click(function(){
     nextinput++;
     result = '<div class="col-md-3 form-group lol'+nextinput+'"><label>Nombre'+nextinput+':</label><input type="text" class="form-control" name="nombre_fol'+nextinput+'"></div><div class="col-md-3 form-group lol'+nextinput+'"><label>Apellido Paterno:</label><input type="text" class="form-control" name="ap_fol'+nextinput+'"></div><div class="col-md-3 form-group lol'+nextinput+'"><label>Apellido Materno:</label><input type="text" class="form-control" name="am_fol'+nextinput+'"></div><div class="col-md-3 form-group lol'+nextinput+'"><label>Clave de elector:<span class="label label-danger contador_fol" id="contador_fol'+nextinput+'">0</span></label><input type="text" maxlength="18" class="form-control" name="ce_fol'+nextinput+'" title="La clave de elector no puede estar vacia" id="ce_fol'+nextinput+'"></div>';   
     if(nextinput <= 6){
      $("#fol_result").append(result);
      /*eventos*/

      $("#ce_fol2").on('keyup',function(){
      var cont = $("#ce_fol2").val().length;
      $("#contador_fol2").html(cont);

      if(cont == 18){
        $("#contador_fol2").removeClass('label-danger');
        $("#contador_fol2").addClass('label-success');
      }else{
        $("#contador_fol2").removeClass('label-success');
        $("#contador_fol2").addClass('label-danger');
      }

    var value = $("#ce_fol2").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol2").val(value_without_space);
      
    });

    $("#ce_fol3").on('keyup',function(){
      var cont = $("#ce_fol3").val().length;
      $("#contador_fol3").html(cont);

      if(cont == 18){
        $("#contador_fol3").removeClass('label-danger');
        $("#contador_fol3").addClass('label-success');
      }else{
        $("#contador_fol3").removeClass('label-success');
        $("#contador_fol3").addClass('label-danger');
      }

    var value = $("#ce_fol3").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol3").val(value_without_space);
      
    });

    $("#ce_fol4").on('keyup',function(){
      var cont = $("#ce_fol4").val().length;
      $("#contador_fol4").html(cont);

      if(cont == 18){
        $("#contador_fol4").removeClass('label-danger');
        $("#contador_fol4").addClass('label-success');
      }else{
        $("#contador_fol4").removeClass('label-success');
        $("#contador_fol4").addClass('label-danger');
      }

    var value = $("#ce_fol4").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol4").val(value_without_space);
      
    });

    $("#ce_fol5").on('keyup',function(){
      var cont = $("#ce_fol5").val().length;
      $("#contador_fol5").html(cont);

      if(cont == 18){
        $("#contador_fol5").removeClass('label-danger');
        $("#contador_fol5").addClass('label-success');
      }else{
        $("#contador_fol5").removeClass('label-success');
        $("#contador_fol5").addClass('label-danger');
      }

    var value = $("#ce_fol5").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol5").val(value_without_space);
      
    });

    $("#ce_fol6").on('keyup',function(){
      var cont = $("#ce_fol6").val().length;
      $("#contador_fol6").html(cont);

      if(cont == 18){
        $("#contador_fol6").removeClass('label-danger');
        $("#contador_fol6").addClass('label-success');
      }else{
        $("#contador_fol6").removeClass('label-success');
        $("#contador_fol6").addClass('label-danger');
      }

    var value = $("#ce_fol6").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol6").val(value_without_space);
      
    });
      /*eventos*/
     }     
   });

   $("#plus2").click(function(){
      $(".lol"+nextinput).remove();
      nextinput--;
   });
});

$(document).ready(function() {
      $('#ingresar_fol').click(function(){
         var dataString = $('#form_fol').serialize();
               $.ajax({
                  type: "POST",
                  url: "../modules/components/reg_fol.php",
                  data: dataString,
                  success: function(data){
                     $('#resultado_fol').html(data).fadeIn(); 
                  }                 
               });
      });
});

$(document).ready(function() {
$( '#cotros' ).on( 'click', function() {
    if( $(this).is(':checked') ){
        // Hacer algo si el checkbox ha sido seleccionado
        $("#otros").removeClass('hidden');
        $('#palomita1').prop("disabled", true);
        $('#palomita2').prop("disabled", true);
        $('#palomita3').prop("disabled", true);
        $('#palomita4').prop("disabled", true);
        $('#palomita5').prop("disabled", true);
        $('#palomita6').prop("disabled", true);
        $('#palomita7').prop("disabled", true);

    } else {
        // Hacer algo si el checkbox ha sido deseleccionado
        $("#otros").addClass('hidden');
        $('#palomita1').removeAttr("disabled");
        $('#palomita2').removeAttr("disabled");
        $('#palomita3').removeAttr("disabled");
        $('#palomita4').removeAttr("disabled");
        $('#palomita5').removeAttr("disabled");
        $('#palomita6').removeAttr("disabled");
        $('#palomita7').removeAttr("disabled");
    }
});
});

$(document).ready(function(){
   $("#btn-verificar").click(function(){
   var folio = $("#folio").val().length;
   var nom = $("#nombre_fol").val().length;
   var ap = $("#ap_fol").val().length;
   var am = $("#am_fol").val().length;
   var ce = $("#ce_fol").val().length;
   var secc = $("#secc_fol").val().length;
   var gestor = $("#nom_ges_fol").val().length;
   var selected = new Array();
   var error = '<i class="glyphicon glyphicon-remove" style="color:red;" id="error_fol"></i>';
   var ok = '<i class="glyphicon glyphicon-ok" style="color:green;" id="ok_fol"></i>';

      if(folio == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar").append(error);
         $("#div_folio").addClass('has-error');
         $("#folio").attr('title','El folio no puede estar vacio');
         $("#folio").tooltip();
          var folio_val = false;
      }else if(folio < 5){
         $("#folio").tooltip('destroy');
         $("#icon_validar").append(error);
         $("#div_folio").addClass('has-error');
         $("#folio").removeAttr('title');
         $("#folio").attr('title','El folio debe ser de 5 digitos');
         $("#folio").tooltip();
         var folio_val = false;
      }else{
         $("#icon_validar").remove();
         $("#icon_validar").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_folio").removeClass('has-error');
         /*$("#folio").removeClass('alterado');*/
         $("#div_folio").addClass('has-success');
         $("#folio").removeAttr('title','El folio no puede estar vacio');
         var folio_val = true;
         /*$("#ok_fol").removeClass('hidden');*/
         /*$("#lol").remove*/
      }

      if(ce == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_ce").append(error);
         $("#div_ce").addClass('has-error');
         $("#ce_fol").attr('title','La clave de elector no puede estar vacio');
         $("#ce_fol").tooltip();
         var clave_elector = false;
      }else if(ce < 18){
         $("#div_ce").addClass('has-error');
         $("#ce_fol").tooltip('destroy');
         $("#icon_validar_ce").append(error);
         $("#ce_fol").removeAttr('title');
         $("#ce_fol").attr('title','La clave de elector debe tener 18 caracteres');
         $("#ce_fol").tooltip();
         var clave_elector = false;
      }else{
         $("#icon_validar_ce").remove();
         $("#icon_validar_ce").append(ok);
        $("#error_fol").addClass('hidden');
         $("#div_ce").removeClass('has-error');
         $("#div_ce").addClass('has-success');
         $("#ce_fol").removeAttr('title');
         var clave_elector = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(nom == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_nom").append(error);
         $("#div_nom").addClass('has-error');
         $("#nombre_fol").attr('title','El nombre del jefe de familia no puede estar vacio');
         $("#nombre_fol").tooltip();
         var nombre_jefe = false;
      }else{
        $("#icon_validar_nom").remove();
         $("#icon_validar_nom").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_nom").removeClass('has-error');
         $("#div_nom").addClass('has-success');
         $("#nombre_fol").removeAttr('title');
         var nombre_jefe = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(ap == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_ap").append(error);
         $("#div_ap").addClass('has-error');
         $("#ap_fol").attr('title','El apellido paterno no puede estar vacio');
         $("#ap_fol").tooltip();
         var a_paterno = false;
      }else{
        $("#icon_validar_ap").remove();
         $("#icon_validar_ap").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_ap").removeClass('has-error');
         $("#div_ap").addClass('has-success');
         $("#ap_fol").removeAttr('title');
         var a_paterno = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(am == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_am").append(error);
         $("#div_am").addClass('has-error');
         $("#am_fol").attr('title','El apellido materno no puede estar vacio');
         $("#am_fol").tooltip();
         var a_materno = false;
      }else{
        $("#icon_validar_am").remove();
         $("#icon_validar_am").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_am").removeClass('has-error');
         $("#div_am").addClass('has-success');
         $("#am_fol").removeAttr('title');
         var a_materno = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(gestor == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_gestor").append(error);
         $("#div_gestor").addClass('has-error');
         $("#nom_ges_fol").attr('title','El nombre del gestor no puede estar vacio');
         $("#nom_ges_fol").tooltip();
         var gestor_val = false;
      }else{
        $("#icon_validar_gestor").remove();
         $("#icon_validar_gestor").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_gestor").removeClass('has-error');
         $("#div_gestor").addClass('has-success');
         $("#nom_ges_fol").removeAttr('title');
         var gestor_val = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(secc == 0){
         /*$("#folio").addClass('alterado');*/
         $("#icon_validar_secc").append(error);
         $("#div_secc").addClass('has-error');
         $("#secc_fol").attr('title','El nombre del gestor no puede estar vacio');
         $("#secc_fol").tooltip();
         var seccion = false;
       }else{
        $("#icon_validar_secc").remove();
         $("#icon_validar_secc").append(ok);
         $("#error_fol").addClass('hidden');
         $("#div_secc").removeClass('has-error');
         $("#div_secc").addClass('has-success');
         $("#secc_fol").removeAttr('title');
         var seccion = true;
         /*$("#folio").removeClass('alterado');*/
         /*$("#lol").remove*/
      }

      if(folio_val == true && nombre_jefe == true && a_paterno == true && a_materno == true && clave_elector == true && gestor_val == true && seccion == true){
        $("#ingresar_fol").prop('disabled', false);
        $("#folio").focus();
        $("div.form-control").removeClass('has-success');
      }else{
        $("#ingresar_fol").prop('disabled', true);
      }
 
  // Evento que se ejecuta al pulsar en un checkbox
  


/*      var ce = $("#ce_fol").val().length;
      if(ce == 0){
         $("#ce_fol").addClass('alterado');
         $("#div_ce").addClass('has-error');
         $("#ce_fol").focus();
         $("#ce_fol").tooltip();
      }else{
         $("#div_ce").removeClass('has-error');
         $("#ce_fol").removeattr('title','El folio no puede estar vacio');
         $("#ce_fol").removeClass('alterado');
         $("#div_ce").addClass('has-success');

      }*/
   });
});

  $(document).ready(function(){

    $("#ce").keyup(function(){
      var cont = $("#ce").val().length;
      $("#contador").html(cont);

      if(cont == 18){
        $("#contador").removeClass('label-danger');
        $("#contador").addClass('label-success');
      }else{
        $("#contador").removeClass('label-success');
        $("#contador").addClass('label-danger');
      }

    var value = $("#ce").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce").val(value_without_space);
      
    });
  });

$(document).ready(function(){

    $("#ce_fol").on('keyup',function(){
      var cont = $("#ce_fol").val().length;
      $("#contador_fol").html(cont);

      if(cont == 18){
        $("#contador_fol").removeClass('label-danger');
        $("#contador_fol").addClass('label-success');
      }else{
        $("#contador_fol").removeClass('label-success');
        $("#contador_fol").addClass('label-danger');
      }

    var value = $("#ce_fol").val();

    var value_without_space = $.trim(value).toUpperCase();
 
    $("#ce_fol").val(value_without_space);
      
    });

$("#ce_fol").attr('maxlength','18');

});

$(document).ready(function (){
      $('#folio').attr('maxlength','5');
      $('#folio').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });
});

$(document).ready(function (){
      $('#secc_fol').attr('maxlength','3');
      $('#secc_fol').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });
});

$(document).ready(function (){
      $('#tel_fol').attr('maxlength','10');
      $('#tel_fol').keyup(function (){
        this.value = (this.value + '').replace(/[^0-9]/g, '');
      });
});

$(document).ready(function(){
$("input[type=checkbox]").change(function(){
 
    // Cogemos el elemento actual
    var elemento=this;
    var contador=0;
 
    // Recorremos todos los checkbox para contar los que estan seleccionados
    $("input[type=checkbox]").each(function(){
      if($(this).is(":checked"))
        contador++;
    });
 
    var cantidadMaxima=parseInt($("#cantidad").val()) || 0;
 
    // Comprovamos si supera la cantidad máxima indicada
    if(contador>cantidadMaxima)
    {
      swal({
  type: 'error',
  title: 'Oops...',
  text: 'Solo puedes seleccionar 3 programas sociales',
  footer: '<a href>Why do I have this issue?</a>'
})
 
      // Desmarcamos el ultimo elemento
      $(elemento).prop('checked', false);
      contador--;
    }
 
    $("#seleccionados").html(contador);
  });
});

$(document).ready(function(){

    $("#ingresar_fol").click(function(){
    $("input").removeClass('has-success');
    $("div").removeClass('has-success');
       $("#ingresar_fol").prop('disabled', true);
    });

});

$(document).ready(function() {
      $('#folio').blur(function(){
         var dataString = $('#form_fol').serialize();
               $.ajax({
                  type: "POST",
                  url: "../modules/components/verificar_folio.php",
                  data: dataString,
                  success: function(data){
                     $('#resultado_fol').html(data).fadeIn(); 
                  }                 
               });
      });
});

$(document).ready(function() {
      $('#busqueda_consulta_query').click(function(){
         var dataString = $('#consulta_folios').serialize();
               $.ajax({
                  type: "POST",
                  url: "../modules/components/select_folios.php",
                  data: dataString,
                  success: function(data){
                     $('#resultado_consulta_fol').html(data).fadeIn(); 
                  }                 
               });
            
      });
});

$(document).ready(function() {
         var dataString = $('#consulta_folios').serialize();
         $('#resultado_consulta_fol').html('<div class="loading"><center><img width="10%" src="../images/loader.gif" alt="loading" /><br/><h1>Cargando...<br>Espere un momento por favor.</h1></center></div><br><br><br><br>');
               $.ajax({
                  type: "POST",
                  url: "../modules/components/consulta_folios.php",
                  data: dataString,
                  success: function(data){
                     $('#resultado_consulta_fol').html(data).fadeIn(); 
                  }                 
               });
        return false;
});