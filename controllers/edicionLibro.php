	<?php 
	require('conexionBD.php');

		if (isset($_REQUEST['editar2'])) {  

		$id_libro = $_REQUEST['id_libro'];
		$titulo_libro = $_REQUEST['titulo_libro'];	
		$autor_libro = $_REQUEST['autor_libro'];
		$descripcion_libro = $_REQUEST['descripcion_libro'];
		$categoria_libro = $_REQUEST['categoria_libro'];
		$cantidad  = $_REQUEST['cantidad']; 
		$ruta_libro = $_REQUEST['ruta_libro'];

		actualizarLibro($id_libro, $titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_libro); 
	} 
	
	function buscarLibro($id_libro) {
		global $conexion;
		$query = "SELECT * FROM libro WHERE id_libro=$id_libro";

		$res_query = mysqli_query($conexion, $query) or die('Revise su consulta de busqueda');
		mysqli_close($conexion);
		
		return mysqli_fetch_array($res_query, MYSQLI_ASSOC);

	}
	
	function actualizarLibro($id_libro, $titulo_libro, $autor_libro, $descripcion_libro, $categoria_libro, $cantidad, $ruta_libro) {
		global $conexion;

		$query_update = "UPDATE libro
						 SET  titulo_libro = '$titulo_libro' autor_libro = '$autor_libro', descripcion_libro = '$descripcion_libro', categoria_libro = '$categoria_libro' cantidad = '$cantidad' ruta_libro = '$ruta_libro'
        				 WHERE id_libro=$id_libro";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		mysqli_close($conexion);

		
	}


	?>