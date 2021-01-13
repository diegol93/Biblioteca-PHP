<?php  
	require('conexionBD.php');  




	if (isset($_REQUEST['enviar'])) { 
		
		$id_tipo_usuario = $_REQUEST['id_tipo_usuario'];
		$nombres = $_REQUEST['nombres'];
		$apellidos = $_REQUEST['apellidos'];
		$cuenta = $_REQUEST['cuenta'];
		$contrasenia = $_REQUEST['contrasenia'];

		registrarUsuario($id_tipo_usuario, $nombres, $apellidos, $cuenta, $contrasenia);
	}

		function registrarUsuario( $id_tipo_usuario, $nombres, $apellidos, $cuenta, $contrasenia) {
		global $conexion;
		$query_insert = "INSERT INTO usuario ( id_tipo_usuario, nombres, apellidos, cuenta, contrasenia)
						 VALUES('$id_tipo_usuario', '$nombres', '$apellidos', '$cuenta', '$contrasenia')";

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
	<a href="../index.php">Aceptar</a>
	</fieldset>

</body>
</html>


