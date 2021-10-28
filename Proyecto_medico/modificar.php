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

<?php 

include "conexion.php";

$edit = $_GET['edit'];

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$edit'") or die("Problemas en el select".mysqli_error($conexion));

?>


<!DOCTYPE html>
<html>
<head>
	<title> Modificar registro </title>
	<link rel="stylesheet" type="text/css" href="css/estilo8.css">
</head>
<body>
<nav>
	<h2> Actualizar registros de usuarios</h2>
</nav>


  		<form action="actualizar.php" method="post">

           <?php 

               while ($row=mysqli_fetch_array($resultado)) {
               	echo "<label>Nombre:</label>";
                echo "<input type='text' name='nombre' value='$row[nombre]'><br>";
                echo "<label>Usuario:</label>";
               	echo "<input type='text' name='usuario' value='$row[usuario]'><br>";
                echo "<label>Password:</label>";
               	echo "<input type='password' name='password' value='$row[password]'><br>";
                echo "<label>Tipo:</label>";
                echo "<input type='text' name='tipo' value='$row[tipo]'><br>";
               }


           ?>

  		    <input type="hidden" name="codigo" value="<?php echo $edit;?>" >	
  	      <input type="submit" name="" value="Actualizar" class="boton">		
          <a href="mostrar_usuarios.php"><input type="button" name="" value="Cancelar" class="boton"></a> 
  		</form>
 
</body>
</html>