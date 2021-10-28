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
<html lang="es">
<head>
	<title> Mostrar Registros</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo7.css">
</head>
<body>

<nav>
	<h2> Mostrar Registros de medicos para realizar modificaciones </h2>
</nav>
<?php 

include "conexion.php";

?>

<table>
	<tr>
		<th>Nombre</th>
		<th>Apellidos </th>
		<th>Especialidad</th>
		<th colspan="2">Botones de Accion</th>
	</tr>
    <tbody>
    	<?php 
        $registros= mysqli_query($conexion, "SELECT * FROM medicos") or die("Problemas en el select".mysqli_error($conexion));
          
          while ($row = mysqli_fetch_array($registros)) { ?>
          	<tr>
		      
		      <td><?php echo $row['nombre']?></td>
		      <td><?php echo $row['apellidos']?></td>
		      <td><?php echo $row['especialidad']?></td>
		      <td> 
                 <a href="modificar.php?edit=<?php echo $row['id_medico']?>" class="edit_btn"> Editar </a>
		      </td>
		      <td> 
                 <a href="eliminar.php?del=<?php echo $row['id_medico']?>" class="del_btn"> Eliminar </a>
		      </td>
	        </tr>
        <?php  } ?>
     </tbody>

</table>

<center><a class="button1" href="administrador.php">Volver al Panel</a></center>
</body>
</html>