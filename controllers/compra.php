<?php  
	require('conexionBD.php');  

	if (isset($_REQUEST['enviar'])) { 
		
		$id_usuario = $_REQUEST['id_usuario'];
		$id_libro = $_REQUEST['id_libro'];
		$fecha_compra = $_REQUEST['fecha_compra'];
		

		registrarCompra($id_usuario, $id_libro, $fecha_compra);
	}

		function registrarCompra( $id_usuario, $id_libro, $fecha_compra) {
		global $conexion;
		$query_insert = "INSERT INTO compra (id_usuario, id_libro, fecha_compra)
						 VALUES('$id_usuario', '$id_libro', '$fecha_compra')";

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
	<a href="../html/cabecera1.php">Aceptar</a>
	</fieldset>

</body>
</html>


