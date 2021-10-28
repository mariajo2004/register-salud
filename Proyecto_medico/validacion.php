<?php 

include "conexion.php";

$usuario= $_POST['usuario'];
$clave= $_POST['clave'];


$admin = mysqli_query($conexion,"select * from usuarios where usuario ='$usuario' && password ='$clave' && tipo='admin'");
$usu=mysqli_query($conexion,"select * from usuarios where usuario ='$usuario' && password ='$clave' && tipo='user'");
$estu =mysqli_query($conexion,"select * from usuarios where usuario ='$usuario' && password ='$clave' && tipo='estu'");


if(mysqli_num_rows($admin) > 0) {
	$fila = mysqli_fetch_row($admin);
	$ced = $fila[0];
	$name = $fila[1]; 
	$tipo = $fila[4];
	session_start();
	$_SESSION['id_usuario'] = $ced;
	$_SESSION['nombre'] = $name;
	$_SESSION['usuario']=$usuario;
	$_SESSION['tipo'] = $tipo;

	header('location:administrador.php');

}elseif(mysqli_num_rows($usu) > 0) {
	$fila = mysqli_fetch_row($usu);
	$ced = $fila[0];
	$name = $fila[1]; 
	$tipo = $fila[4];
	session_start();
	$_SESSION['id_usuario'] = $ced;
	$_SESSION['nombre'] =$name;
	$_SESSION['usuario']=$usuario;
    header('location:usuario.php');

	
}elseif(mysqli_num_rows($estu) > 0) {
	$fila = mysqli_fetch_row($estu);
	$ced = $fila[0];
	$name = $fila[1]; 
	$tipo = $fila[4];
	session_start();
	$_SESSION['id_usuario'] = $ced;
	$_SESSION['nombre'] =$name;
	$_SESSION['usuario']=$usuario;
    header('location:estudiante.php');
}else{
	echo '<script languaje="javasscript">alert("error de autentificacion");window.location.href="login.html"</script>';
}
/*
mysql_free_result($resultado);
mysql_close($conexion);*/

?>



