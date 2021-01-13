
<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>PHP B&aacute;sico</title>
		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
		<link type="text/css" rel="stylesheet" href="../css/main.css"/>
		<link type="text/css" rel="stylesheet" href="../css/formularios2.css"/>
	</head>

	<body>
		<header>
			<div class="wrapper">
				<h1 class="logo"> Libreria Virtual</h1>

				<nav>
					<a href="../html/cabecera.php">Inicio</a>
				</nav>
			</div>
		</header>

		<section class="contenido wrapper">
			<h1>Lista de Libros</h1>
			<a class="btn" href="registroLibros.php">Añadir Nuevo Libro</a><br/>
			<table border="2">
				<thead>
					<tr>
						<th>IdLibro</th>
						<th>Titulo Libro</th>
						<th>Autor Libro</th>
						<th>Descripcion</th>
						<th>Categoria</th>
						<th>Cantidad</th>
						<th>Ruta</th> 
						<th>Portada</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						include '../controllers/listaDeLibros.php'; 

						$libros = listaLibros();

						foreach ($libros as $libro): 
					?>
					
					<tr>
					
					    <td><?php echo $libro['id_libro']?></td> 
						<td><?php echo $libro['titulo_libro'] ?></td>
					    <td><?php echo $libro['autor_libro'] ?></td>
					    <td><?php echo $libro['descripcion_libro'] ?></td>
					    <td><?php echo $libro['categoria_libro'] ?></td>
					    <td><?php echo $libro['cantidad'] ?></td> 
					    <td><?php echo $libro['ruta_imagen']?></td> 
					    <td><img height="70px" src="data:image/jpg;base64,<?php echo base64_encode($libro['imagen']);?>"/></td>
				   		<td>
				   		<a href="editarLibro.php?id_libro=<?php echo $libro['id_libro'] ?>"">Editar</a> 
			      		<a href="../controllers/eliminarLibro.php?id_libro=<?php echo $libro['id_libro'] ?>"">Eliminar</a>  
			      		</td>>	
				     </tr>
				    <?php endforeach ?>

				</tbody>
			</table>

			
		</section>
	</body>
</html>