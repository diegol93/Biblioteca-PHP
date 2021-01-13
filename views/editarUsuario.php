
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
                	include '../controllers/edicionUsuario.php'; 

				$usuario = buscarUsuario($_REQUEST['id_usuario']);
				?>

                <form action="../controllers/edicionUsuario.php?id_usuario=<?php echo $usuario['id_usuario'];?>" method="post">
                	<label>ID_Usuario</label> 
                	<input type="text" name="id_tipo_usuario" value = "<?php echo $usuario['id_tipo_usuario']?>"> <br/>

                    <label>Nombres:</label>
                    <input type="text" name="nombres" value="<?php echo $usuario['nombres'] ?>"><br/>

                    <label>Apellidos:</label>
                    <input type="text" name="apellidos" value="<?php echo $usuario['apellidos'] ?>"><br/>
                    
                    <label>Cuenta:</label>
                    <input type="text" name="cuenta" value="<?php echo $usuario['cuenta'] ?>"><br/>

                    <label>Contraseña:</label>
                    <input type="text" name="contrasenia" value="<?php echo $usuario['contrasenia'] ?>"><br/>

                    <input type="hidden" name="id_usuario" value="<?php echo $_REQUEST['id_usuario'] ?>">

                    <input type="submit" name="editar2" value="Guardar cambios">
                </form>
            </fieldset>
		</section>
	</body>
</html>