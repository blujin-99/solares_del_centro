<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="../JS/validarLogin.js"></script>
            <link rel="stylesheet" href="../Normalize/normalize.css">
            <link rel="stylesheet" type="text/css" href="../CSS/inicio.css">
            <link rel="stylesheet" type="text/css" href="../CSS/registro_usuario.css">
            <title>Solares del centro</title>
        </head>
        <body>
            <nav class="barra_nav">
                <ul class="ir_inicio">
                    <li><button id="direc_inicio_sesion" onclick="document.getElementById('inicio-sesion').style.display='block'">Iniciar Sesión</button></li>
                    <li><a id="direc_inicio"href="registro.php">Registrarme</a></li>
                </ul>
            </nav>

            <main>
                
                <form  method="POST" action="inicio_sesion.php" class="inicio-sesion"  id="inicio-sesion" onsubmit="return validarLogin();" >
                    <h1>Iniciar Sesión</h1>
                    <input type="text" id ="emaiil" name="email" placeholder="E-mail">
                    <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
                    <p id="recuperacion_contraseña">¿olvidates tu contraseña?<a href="recuperar_mi_contraseña.php">Recuperar contraseña</a></p>
                    <button id="boton_inicio" type="submit">Iniciar</button>
                    <p id="textoregistrarme">¿No tienes una cuenta?<a href="registro.php">Registrate</a></p>
                </form>
            </main>
        </body>
    </html>