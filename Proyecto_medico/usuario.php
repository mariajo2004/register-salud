<?php
session_start();
if (isset($_SESSION["nombre"])) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location: login.html");
//salimos de este script
exit();
}

?>


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
                   <li><a href="#">Ver especialidades <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="medico_general.php">
                           Medico general
                       </a></li>
                       <li><a href="especialistas.php">
                           Especialistas
                       </a></li>
                       <li><a href="odontologia.php">
                           Odontologia
                       </a></li>
                   </ul>
                   </li>
                   <li><a href="#">Servicios</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">

                       <li><a href="cambiar.php"> Cambiar contraseña  </a></li>
                       <li><a href="buscar_medico.php"> Buscar medicos </a></li>
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
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
<h1> hola Usuario;</h1>

<?php
  echo $_SESSION['nombre'];
  echo "<br>";
  echo "<br> Es Usuario";

?>

</div>


<a class="button1" href="buscar_medico.php"> Buscar Medicos por especialidad</a>
<a class="button2" href="citas/index.php"> Asignar citas </a>
<a class="button3" href="reportes.php">Generar Pdf</a>

</body>
</html>