<?php 
	require ('conexionBD.php');

	$id_usuario_eliminar = $_REQUEST['id_usuario_eliminar'];

	$query_delete = "DELETE FROM usuario WHERE id_usuario=$id_usuario_eliminar";

	mysqli_query($conexion, $query_delete) or die('Revise su consulta de eliminacion');
	mysqli_close($conexion);


	echo "<script language='javascript'>alert('Se elimino el registro exitosamente')</script>";
	echo "<script language='javascript'>window.location='../views/usuarios/listado.php'</script>";
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
	<a href="../views/listadoUsuarios.php">Aceptar</a>
	</fieldset>

</body>
</html>
