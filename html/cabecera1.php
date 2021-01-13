<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Librería Virtual</title>

		<link type="text/css" rel="stylesheet" href="../css/estilos.css"/> 
</head>


<body>
	<?php if(isset($_SESSION['login_usr'])): ?> 
		<header>	
			<div class="wrapper"> 
				<h1 class= "logo"> Libreria Virtual</h1>
				<nav>
					<a href="../views/listarLibrosUsuario.php">Libros</a>  
					
					<a href="../views/listaCompras.php">Lista Compras</a>
					
					<a href="../controllers/logoutUser.php">Logout</a>
				</nav> 

				</div> 
				</header>
				<section class="contenido wrapper">
			<p>
				Bienvenido Usuario	 
				<?php echo $_SESSION['login_usr'] .' '. $_SESSION['login_apellidos'];?>
			</p>
			</section>    

			 <?php else: ?>
                <header>
            <div class="wrapper">
                <h1 class="logo">Libreria Vitual</h1>

                <nav>
                    <a href="../index.php">Inicio</a></li> 
                    <a href="../views/loginUser.php">Login</a></li>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
            <h1>Ingresar Cuenta Usuario</h1>

        </section>


     <?php endif?>
		<section class="contenido wrapper">

		</section>
	</body>
	</html> 


