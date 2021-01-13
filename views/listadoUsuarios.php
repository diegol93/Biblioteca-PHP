
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
					
					
				</nav>
			</div>
		</header>

		<section class="contenido wrapper">
			<h1>Lista de Usuarios</h1>
			<a class="btn" href="seleccion.php">Nuevo Usuario</a>
			<table border="2">
				<thead>
					<tr>
						<th>Id_Usuario</th>
						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cuenta</th>
						<th>Contraseña</th>
						<th>Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						include '../controllers/listaDeUsuarios.php'; 

						$usuarios = listaUsuarios();

						foreach ($usuarios as $usuario): 
					?>
					
					<tr>

						<td><?php echo $usuario['id_tipo_usuario'] ?></td>
					    <td><?php echo $usuario['nombres'] ?></td>
					    <td><?php echo $usuario['apellidos'] ?></td>
					    <td><?php echo $usuario['cuenta'] ?></td>
					    <td><?php echo $usuario['contrasenia'] ?></td>
				   		<td>
				   		<a href="editarUsuario.php?id_usuario=<?php echo $usuario['id_tipo_usuario'] ?>"">Editar</a> 
			      			<a href="../controllers/eliminarUsuario.php?id_usuario_eliminar=<?php echo $usuario['id_tipo_usuario'] ?>"">Eliminar</a> 
				        </td>
				     </tr>
				    <?php endforeach ?>

				</tbody>
			</table>

			
		</section>
	</body>
</html>