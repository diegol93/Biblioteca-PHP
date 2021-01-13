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
			<h1>Añadir Libro</h1>
			<fieldset>

			<legend>Datos Del Libro</legend>    
			<form action="../controllers/libros.php" method="post" enctype="multipart/form-data">
				<label>Titulo</label> 
				<input type="text" name="titulo_libro"><br/>
				<label>Autor</label> 
				<input type="text" name="autor_libro"><br/>
				<label>Descripcion</label> 
				<input type="text" name="descripcion_libro"><br/>
				<label>Categoria</label> 
				<input type="text" name="categoria_libro"><br/>
				<label>Cantidad</label> 
				<input type="text" name="cantidad"><br/>

				<label>Ruta</label>
				<input type="text" name="ruta_imagen"/><br/> 

				<input type="file" name="imagen">

                 <input type="submit" name="enviar" value="Subir">

			</form>
			</fieldset> 
		</section>

	</body>
</html>