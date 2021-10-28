<?php
session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo"]=='admin' )) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location:login.html");
//salimos de este script
exit();
}

?>


<!DOCTYPE html>


<html>
<head>
	<title></title>
  <link rel="stylesheet" href="css/estilo4.css">
  <link rel="stylesheet" type="text/css" href="css/estilo14.css">
</head>
<body>

<header class="header">
	<div class="container">
		       <div class="logo">
              <img src="imagenes/logo.ico" class="logo">
           </div>
           <nav class="menu">
           	     <ul>
                   <li><a href="#">Inicio</a></li>
                   <li><a href="#">Ver medicos <i class="icon-abajo2"></i></a>
                   <li><a href="#">Servicios</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                      <a href="cambiar.php"> Cambiar contraseña </a>
                      <a href="ingresar_usuarios.php"> Ingresar usuario </a>
                      <a href="cerrar_sesion.php"> cerrar sesion </a>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
	</div>

</header>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="box1">

<h1> hola administrador;</h1>

  <?php
  echo $_SESSION['nombre'];
  echo "<br>";
  echo "<br> Es administrador";

?>

</div>

<a class="button" href="mostrar_usuarios.php"> Mostrar usuarios </a>
<a class="button1" href="mostrar_medicos.php"> Mostrar Medicos </a>
<a class="button2" href="citas/index.php"> Asignar citas </a>
<a class="button3" href="reportes.php">Generar Pdf</a>


</body>
</html>