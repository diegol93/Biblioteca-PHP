
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
 

		<title>Biblioteca Virtual</title>
		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
		<link type="text/css" rel="stylesheet" href="../public/css/main.css"/>
		<link type="text/css" rel="stylesheet" href="../public/css/formularios.css"/>


	</head>	<body>
		<header>
			<div class="wrapper">
				<h1 class="logo">Biblioteca Virtual</h1>

				<nav>
					<a href="/index.php">Inicio</a></li>
					
				</nav>
			</div>
		</header>

		<section class="contenido wrapper">
			<h1>Edicion de un Usuario</h1>

            <fieldset>
                <legend>Datos Personales</legend>   
                <?php 
                	include '../controllers/edicionLibro.php'; 

				$libro = buscarLibro($_REQUEST['id_libro']); 
                $id_libro = $_REQUEST['id_libro'];
				?>


                <form action="../controllers/edicionLibro.php?id_libro=<?php echo $libro['id_libro']; ?>" method="post">
                	 
                	

                    <label>Titulo:</label>
                    <input type="text" name="titulo_libro" value="<?php echo $libro['titulo_libro'] ?>"><br/>

                    <label>Autor:</label>
                    <input type="text" name="autor_libro" value="<?php echo $libro['autor_libro'] ?>"><br/>
                    
                    <label>Descripcion:</label>
                    <input type="text" name="descripcion_libro" value="<?php echo $libro['descripcion_libro'] ?>"><br/>

                    <label>Categoria:</label>
                    <input type="text" name="categoria_libro" value="<?php echo $libro['categoria_libro'] ?>"><br/>

                     <label>Cantidad:</label>
                    <input type="text" name="cantidad" value="<?php echo $libro['cantidad'] ?>"><br/> 

                     <label>Ruta:</label>
                    <input type="text" name="ruta_libro" value="<?php echo $libro['ruta_libro'] ?>"><br/> 

                    <input type="hidden" name="id_libro" value = "<?php echo $libro['id_libro']?>"> <br/>

                    
                    <input type="submit" name="editar2" value="Guardar cambios">
                </form>
            </fieldset>
		</section>
	</body>
</html>