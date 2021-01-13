<?php 
	require('conexionBD.php');

	if (isset($_REQUEST['aceptar'])) { 
		 
		$nombre_tipo_usuario = $_REQUEST['nombre_tipo_usuario'];


		asignarID( $nombre_tipo_usuario);	  
	}

		function asignarID( $nombre_tipo_usuario) {
		global $conexion;
		$query_insert = "INSERT INTO tipo_usuario (nombre_tipo_usuario) 
						 VALUES('$nombre_tipo_usuario')";

		mysqli_query($conexion, $query_insert) or die('Revise su consulta de insercion');
		mysqli_close($conexion);

	   }
	
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
	<a href="../views/registro.php">Continuar</a>
	</fieldset>

</body>
</html>