<?php 
	require ('conexionBD.php');

	$id_libro_eliminar = $_REQUEST['id_libro'];

	$query_delete = "DELETE FROM libro WHERE id_libro=$id_libro_eliminar";

	mysqli_query($conexion, $query_delete) or die('Revise su consulta de eliminacion');
	mysqli_close($conexion);


	
?> 
<!DOCTYPE html>
<html>
<head>
		<title>Libreria Virtual </title>

		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
		
		<link type="text/css" rel="stylesheet" href="../css/formularios2.css"/> 
		<link type="text/css" rel="stylesheet" href="../css/main.css"/>
</head> 

<body> 
	<section class="contenido wrapper">   
	<fieldset>
	<a href="../views/listarLibros.php">Aceptar</a>
	</fieldset>

</body>
</html>