<!DOCTYPE>  
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
      

		<title>Libreria Virtual </title>

		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
		
		<link type="text/css" rel="stylesheet" href="../css/formularios2.css"/> 
		<link type="text/css" rel="stylesheet" href="../css/main.css"/>
		

		
	</head>  
	<header>
			<div class="wrapper">
				
				<h1 class="logo">Libreria Virtual</h1>
				<nav>
					<a href="../index.php">Inicio</a></li>
					
				</nav>
				</div>
	</header>
	

	<body>  

		<section class="contenido wrapper">
			<h1>Registro de Usuarios</h1>
			<fieldset>
			<legend>Datos Personales</legend>    
			<form action="../controllers/compra.php" method="POST"> 
	
				<label>UsuarioID:</label> 
				<input type="text" name="id_usuario"><br/> 

				<label>LibroID:</label>
				<input type="text" name="id_libro"><br/> 

				<label>Fecha:</label> 
				<input type="text" name="fecha_compra"> <br/> 

				
				<input type="submit" name="enviar" value="Guardar">
			</form>
			</fieldset> 
		</section>

	</body>
</html>