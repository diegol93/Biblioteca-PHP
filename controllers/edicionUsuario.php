	<?php 
	require('conexionBD.php');

		if (isset($_REQUEST['editar2'])) {  

		$id_usuario = $_REQUEST['id_usuario'];
		$id_tipo_usuario = $_REQUEST['id_tipo_usuario'];	
		$nombres = $_REQUEST['nombres'];
		$apellidos = $_REQUEST['apellidos'];
		$cuenta = $_REQUEST['cuenta'];
		$contrasenia = $_REQUEST['contrasenia'];

		actualizarUsuario($id_usuario, $id_tipo_usuario, $nombres, $apellidos, $cuenta, $contrasenia); 
	} 
	
	function buscarUsuario($id_usuario) {
		global $conexion;
		$query = "SELECT * FROM usuario WHERE id_usuario=$id_usuario";

		$res_query = mysqli_query($conexion, $query) or die('Revise su consulta de busqueda');
		mysqli_close($conexion);
		
		return mysqli_fetch_array($res_query, MYSQLI_ASSOC);

	}
	
	function actualizarUsuario($id_usuario, $id_tipo_usuario, $nombres, $apellidos, $cuenta, $contrasenia) {
		global $conexion;

		$query_update = "UPDATE usuario
						 SET id_usuario = '$id_usuario' id_tipo_usuario = '$id_tipo_usuario' nombres = '$nombres', apellidos = '$apellidos', cuenta = '$cuenta' contrasenia = '$contrasenia'
        				 WHERE id_usuario=$id_usuario";

		mysqli_query($conexion, $query_update) or die('Revise su consulta de actualizacion');
		mysqli_close($conexion);

		
	}


	?>