<!DOCTYPE html>
<html lang="es">
<head>
	<title> Buscador medicos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo15.css">
    <link rel="stylesheet" type="text/css" href="css/estilo14.css">
</head>
<body>

<div class="container-main">
	<form action="buscar_medico.php" method="post">
		<input type="search" name="dato" placeholder="ingrese su nombre" class="texto">
		<input type="submit" name="buscador" value="Buscar usuario" class="boton">	
	</form>
</div>

<table class="table-container">
	<thead>
		<tr class="filas">
			<th class="celdas"> Id </th>
			<th class="celdas"> Nombre </th>
			<th class="celdas"> Apellidos </th>
			<th class="celdas"> Especialidad </th>
	   </tr>
	</thead>
<?php 

include "conexion.php";

if (isset($_POST['buscador'])) {
	$buscar = $_POST['dato'];
   
 if (empty($buscar)){
 	echo "ingrese un dato, el campo esta vacio";

 }else {
 	$consulta = "SELECT * FROM medicos WHERE especialidad LIKE '%".$buscar."%'";
	$mostrar = mysqli_query($conexion,$consulta);
	$var_total = mysqli_num_rows($mostrar);

    if ($row = mysqli_fetch_array($mostrar)) {
    	echo "Los resultados para esta busquedad son: $buscar";
    	echo "<br>";
    	echo "El total de datos encontrados fueron: $var_total";
    	echo "<br>";
    	echo "<br>";
        echo "<hr>";
       do{ 

        ?>

        <tr><td> <?php echo $row['id_medico']; ?>
       <?php echo "<br>";?></td>
       <td><?php echo $row['nombre']; ?>
       <?php echo "<br>";?> </td> 
       <td> <?php echo $row['apellidos']; ?>
       <?php echo "<br>";?></td>
       <td><?php echo $row['especialidad']; ?>
       <?php echo "<br>";?> </td> 
       </tr>
       <?php 
 
       }
       while($row = mysqli_fetch_array($mostrar));
       
 }else{
 	echo "No se encontraron datos para esta busqueda: $buscar";
 }
}
}

?>


</table>

<center><a class="button1" href="usuario.php">Volver al Panel</a></center>
</body>
</html>

