<!DOCTYPE>
<html>
	<head>
		<meta charset="utf-8">
		<title>Libreria Virtual</title>
		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
		<link type="text/css" rel="stylesheet" href="../css/main.css"/>
		<link type="text/css" rel="stylesheet" href="../css/formularios2.css"/>
	</head>

	<body>
		<header>
			<div class="wrapper">
				<h1 class="logo"> Libreria Virtual</h1>

				<nav>
					<a href="../html/cabecera1.php">Inicio</a>
				</nav>
			</div>
		</header>

		<section class="contenido wrapper">
			<h1>Lista de Libros Comprados</h1>

			<table border="2">
				<thead>
					<tr>
						<th>IDCompra</th>
						<th>Usuario</th>
						<th>Libro</th>
						<th>Fecha</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						include '../controllers/listaDeCompras.php'; 

						$compras = listaComprasLibros();

						foreach ($compras as $compra): 
					?>
					
					<tr>
					    <td><?php echo $compra['id_compra']?></td> 
						<td><?php echo $compra['id_usuario'] ?></td>
					    <td><?php echo $compra['id_libro'] ?></td>
					    <td><?php echo $compra['fecha_compra'] ?></td> 
					    
				   		
				     </tr>
				    <?php endforeach ?>

				</tbody>
			</table>

			
		</section>
	</body>
</html>