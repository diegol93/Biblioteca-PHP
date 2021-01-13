<?php session_start(); ?>
<!DOCTYPE>
<html>
	<head>
		<title>Libreria Virtual</title>

		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
	</head>

	<body>
	<?php if(isset($_SESSION['login_usrex'])): ?> 
		<header>	
			<div class="wrapper"> 
				<h1 class= "logo"> Libreria Virtual</h1>
				<nav>
					<a href="../views/listarLibros.php">Libros</a>  
					<a href="../views/listadoUsuarios.php">Lista Usuarios</a> 
					<a href="../views/listaDeVentas.php">Lista Ventas</a> 
					<a href="../views/seleccion.php">Registrar Usuario</a>
					
					<a href="../controllers/logout.php">Logout</a>
				</nav> 

				</div> 
				</header>
				<section class="contenido wrapper">
			<p>
				Bienvenido Administrador	 
				<?php echo $_SESSION['login_usrex'] .' '. $_SESSION['login_apellidos'];?>
			</p>
			</section>    

			 <?php else: ?>
                <header>
            <div class="wrapper">
                <h1 class="logo">Libreria Vitual</h1>

                <nav>
                    <a href="../index.php">Inicio</a></li> 
                    
                    <a href="../views/login.php">Login</a></li>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
            <h1>Ingresar Cuenta Administrador</h1>

        </section>


     <?php endif?>
		<section class="contenido wrapper">

		</section>
	</body>
</html>


