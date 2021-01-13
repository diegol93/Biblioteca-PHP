<!DOCTYPE html>
<html>
    <head>
        <title>Sesiones</title>

        <link type="text/css" rel="stylesheet" href="../css/estilos.css"/>
        <link type="text/css" rel="stylesheet" href="../css/formularios.css"/>
    </head>

    <body>
        <header>
            <div class="wrapper">
                <h1 class="logo"> Libreria Virtual</h1>

                <nav>
                    <a href="../index.php">Inicio</a></li>
                    <a href="#">Login</a></li>
                </nav>
            </div>
        </header>

        <section class="contenido wrapper">
            <h1>Login</h1>

            <fieldset>

            <form action="../controllers/autentificarUser.php" method="post">
            
                <label>Cuenta</label>
                <input type="text" name="cuenta"><br/>

                <label>Contraseña </label>
                <input type="password" name="contrasenia"><br/>

                <input type="submit" name="enviar" value="Ingresar">
            
            </form>
            </fieldset>
        </section>
    </body>
</html>