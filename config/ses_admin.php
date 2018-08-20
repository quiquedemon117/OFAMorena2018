<?php
session_start();
if(empty($_SESSION['SES_ADMIN']) && empty($_SESSION['time'])) {
  echo "<center>";
  echo '<div class="container">
      <div class="jumbotron">
        <h1>No puede estar aqui</h1>
        <p>No tiene los suficientes privilegios para acceder al sistema</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../index.html" role="button">Iniciar sesion &raquo;</a>
        </p>
      </div>

    </div>';
  echo "</center>";
}

/*if(! empty($_SESSION['time'])){
  //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 15;//20min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['time'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo){
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            echo "<script>alert('Tu sesion a terminado')</script>";

            exit();
        } else {  // si no ha caducado la sesion, actualizamos
            $_SESSION['time'] = time();
        }
}else{
      $_SESSION['time'] = time();
}*/
?>