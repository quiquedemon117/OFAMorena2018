/*$(function(){
var textfield = $("input[name=user]");
var textfield2 = $("input[name=password]");
            $('button[type="submit"]').click(function(e) {
                e.preventDefault();
                //little validation just to check username
                if (textfield.val() != "") {
                    //$("body").scrollTo("#output");
                    $("#output").addClass("alert alert-success animated fadeInUp").html("Bienvenido " + "<span style='text-transform:uppercase'>" + textfield.val() + "</span>");
                    $("#output").removeClass(' alert-danger');
                    $("input").css({
                    "height":"0",
                    "padding":"0",
                    "margin":"0",
                    "opacity":"0"
                    });
                    //change button text 
                    $('button[type="submit"]').html("Continuar")
                    .removeClass("btn-info")
                    .addClass("btn-default").click(function(){
                    $("input").css({
                    "height":"auto",
                    "padding":"10px",
                    "opacity":"1"
                    }).val("");

                    $("#send").click(function(){
                        $.ajax({
                            type: "POST",
                            url: "../log/login.php",
                            data: $("#form-login").serialize(),
                            success: function(data)
                            {
                                $('#t12').html(data).fadeIn();
                            }
                        });
                    });
                    });
                    
                    //show avatar
                    $(".avatar").css({
                        "background-image": "url('http://api.randomuser.me/0.3.2/portraits/women/35.jpg')"
                    });
                } else {
                    //remove success mesage replaced with error message
                    $("#output").removeClass(' alert alert-success');
                    $("#output").addClass("alert alert-danger animated fadeInUp").html("Coloque el usuario y la contraseña");
                }
                //console.log(textfield.val());

            });
});
*/

$(document).ready(function() {
    $('#form-login').submit(function(){
            $.ajax({
                    type: "POST",
                    url: "../log/login.php",
                    data: $("#form-login").serialize(),
                    success: function(data)
                    {
                        $('#mostrar').html(data).fadeIn();
                    }
            });
    });
});
