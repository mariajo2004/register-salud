<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		 function comprobarClave(){
		 	clave1 = document.f1.clave1.value
		 	clave2 = document.f1.clave2.value

		 	if (clave1 == clave2)
		 		alert(" La contraseña se cambio con exito")

		 	else
		 		alert("Las dos claves son distintas...vuelva a intentarlo")
		 }      exit(); 

	</script>
	<link rel="stylesheet" type="text/css" href="css/estilo9.css">
</head>
<body>
	<div class="box2">
		<form method="post" action="cambiarpass.php" name="f1">
	 Nueva Contraseña: <br>
    <input type="password" name="clave1"><br><br>
    <input type="password" name="clave2"><br><br>
    <input type="submit" value="cambiar" onClick="comprobarClave()" class="boton">
   
</form>
 <button type="submit" name="cancelar" class="boton-one"><a href="administrador.php"> Cancelar </a></button>
	</div>

</body>
</html>