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

if (!empty($_POST)) {
	$cod_mas = $_POST['codi'];
	$query_borrar = mysqli_query($conexion, "DELETE FROM usuarios WHERE id_usuario = '$cod_mas'");
	if ($query_borrar) {
		header("location:mostrar_usuarios.php");
	}else{
		echo "Error al eliminar el registro";
	}
}


$del = $_GET['del'];
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$del'") or die("problemas en el select".mysqli_error($conexion));

while ( $row =mysqli_fetch_array($resultado) ) {
	$codigo = $row['id_usuario'];
	$nombre = $row['nombre'];
}

?>


<!DOCTYPE html>
<html lang="es">
<head>
	<title> Eliminar registro </title>
	<link rel="stylesheet" type="text/css" href="css/estilo9.css">
	<meta charset="utf-8">
</head>
<body>
    <nav>
		<h2> Eliminar registros</h2>
	</nav>
<br>
<br>


<form method="post" action="">
	<div class="box"><p>Estas seguro que desea eliminar el registro</p>
    <?php  echo "con el codigo ".$codigo." y cuyo nombre es: ".$nombre.""; ?>
    </div> <br>
    <input type="hidden" name="codi" value="<?php echo $del;?>">
	<input type="submit" value="Aceptar" class="boton">
	
</form>	
<button type="submit" name="cancelar" class="boton-one"><a href="mostrar_usuarios.php"> Cancelar </a></button>
</body>
</html>