<?php
session_start();
if (isset($_SESSION["nombre"]) && ($_SESSION["tipo"]=='admin' )) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location: login.html");
//salimos de este script
exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <title> Registro </title>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>

   <div class="container-main">
      <form action="registrar_roles.php" method="post" class="form">
         <div class="header">
            <h1 class="title"> FORMULARIO DE REGISTRO </h1>
         </div>
         <strong><label for="nombre" class="label"> Nombre </label></strong>
         <input type="text" id="nom" class="input" name="nombre" placeholder="Ingrese nombres">

         <strong><label for="apell" class="label"> Usuario </label></strong>
         <input type="text" id="apell" class="input" name="usuario" placeholder="Ingrese Apellidos">

         <strong><label for="dir" class="label"> Contraseña </label></strong>
         <input type="text" id="dir" class="input" name="password" placeholder="Ingrese dirección">

         <strong><label> Tipo de usuario </label><br></strong>
      <select class="input" name="tipo" id="roles">
         <option value="admin"> Administrador </option>
         <option value="user"> Usuario </option>
         <option value="medi"> Medico </option>
         <option value="enfer"> Enfermera </option>
      </select><br>
      <br>      
      <center><input type="submit" value="REGISTRARSE" class="button"></center>
      
      </form>
   </div>

 </body>
</html>