<?php 
	$server  = 'localhost' ;
	$username = 'root'; 
	$password = ''; 
	$db       = 'cursophp'; 

	$conexion = mysqli_connect($server, $username, $password, $db) or die('Error: no se pudo conectar con MySQL: ' . mysqli_connect_error()); 

	

?>