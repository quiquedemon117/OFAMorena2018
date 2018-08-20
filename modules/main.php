<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <script type="text/javascript" src="../js/countdown.js"></script>
	<title>Document</title>
</head>
<body>
<?php
if(! empty($_SESSION['SES_ADMIN']) && ! empty($_SESSION['time'])) {
	echo "<center><h2 style='margin:-5px 0px 5px 0px; padding:0px;'>¡BIENVENIDO!</h2></p>";
	echo "<p> Al sistema de morena 2018 </p> </center>";
	echo "<center><h3>Tiempo restante para las elecciones:</h3></center>";
	echo "<center><script type='application/javascript'>

var myCountdownTest = new Countdown({
                  // I'm cheating here... so I don't have to update this every year!
                  // year : 2042, // <-- This is a better example of what to use.
                  year: (new Date().getFullYear()),
                  month : 7, 
                  day   : 1,
                  width : 300, 
                  height  : 60
                  });



</script></center>";
	
}
else {
	echo "<h2 style='margin:-5px 0px 5px 0px; padding:0px;'>¡BIENVENIDO!</h2></p>";
	echo "<b> Por favor <a href='..\index.html' alt='Iniciar Sesion'>Iniciar Sesion </a>para acceder a esta seccion ";	
}

?>
</body>
</html>