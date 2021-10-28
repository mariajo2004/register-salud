<?php
session_start();
if (isset($_SESSION["nombre"])) {
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
</head>
<body>

<header class="header">
	<div class="container">
		       <div class="logo">
               <h1>LOGO</h1>
           </div>
           <nav class="menu">
           	     <ul>
                   <li><a href="#">Inicio</a></li>
                   <li><a href="#">Ver empleados <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="#">
                           Juan
                       </a></li>
                       <li><a href="#">
                           Paco
                       </a></li>
                       <li><a href="#">
                           Diana
                       </a></li>
                   </ul>
                   </li>
                   <li><a href="#">Servicios</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">

                      <a href="cambiar.php">Cambiar contraseña</a>
                      <a href="cerrar_sesion.php"> cerrar sesion</a>
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
<h1> hola Estudiante;</h1>

<?php
  echo $_SESSION['nombre'];
  echo "<br>";
  echo $_SESSION['usuario'];
  echo "<br>";
 echo "<br> Es Estudiante";

?>


