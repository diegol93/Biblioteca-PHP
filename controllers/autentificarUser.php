<?php 
	require ('conexionBD.php');

	session_start();

	$cuenta = $_REQUEST['cuenta'];
	$contrasenia = $_REQUEST['contrasenia'];

	if(isset($cuenta) && isset($contrasenia)) {
		$query = "SELECT * FROM usuario
				  WHERE cuenta='$cuenta' AND contrasenia='$contrasenia'";


		$respuesta_q = mysqli_query($conexion, $query);

		$nfilas = mysqli_num_rows($respuesta_q);

		$usuario = mysqli_fetch_array($respuesta_q, MYSQLI_ASSOC);

		if($nfilas == 1){
			$_SESSION['login_usr'] = $usuario['nombres'];
			$_SESSION['login_apellidos'] = $usuario['apellidos'];

		}

		if(isset($_SESSION['login_usr'])) {
			header('location:../html/cabecera1.php');
		} else {
			header('location:../views/login.php');
		}
	}  

?>  


