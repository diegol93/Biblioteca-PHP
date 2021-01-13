<?php 
require('conexionBD.php');
function listaLibros() {
	
		global $conexion;
		$query_select = 'SELECT * FROM libro';

		$res_query_select = mysqli_query($conexion, $query_select)or 
			die('Revise su consulta SELECT');
		mysqli_close($conexion);

		for($i = 0; $i < mysqli_num_rows($res_query_select); $i++) {
		    $lista[$i] =  mysqli_fetch_array($res_query_select, MYSQLI_ASSOC);
		}

		return $lista;
	} 
?>