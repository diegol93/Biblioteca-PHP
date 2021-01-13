<?php  
	require('conexionBD.php');  

	if (isset($_REQUEST['enviar'])) { 
		
		$titulo_libro = $_REQUEST['titulo_libro']; 
		$autor_libro = $_REQUEST['autor_libro']; 
		$descripcion_libro = $_REQUEST['descripcion_libro']; 
		$categoria_libro = $_REQUEST['categoria_libro']; 
		$cantidad = $_REQUEST['cantidad']; 
		$ruta_imagen = $_REQUEST['ruta_imagen']; 
		$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

		registrarLibro($titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen, $imagen);
	}

		function registrarLibro( $titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_imagen, $imagen) {

		global $conexion;
		$query_insert = "INSERT INTO libro (titulo_libro, autor_libro, descripcion_libro, categoria_libro, cantidad, ruta_imagen, imagen)
						 VALUES('$titulo_libro', '$autor_libro', '$descripcion_libro', '$categoria_libro',         '$cantidad', '$ruta_imagen', '$imagen')";

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
	<a href="../views/listarLibros.php">Aceptar</a>
	</fieldset>

</body>
</html>