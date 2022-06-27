<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Normalize/normalize.css">
        <link rel="stylesheet" href="../CSS/recuperacion_contraseña.css">
        <link rel="stylesheet"  href="../CSS/registro_usuario.css">
        <script src="../JS/validarFormR_contraseña.js"></script>
        <title>Document</title>
    </head>
    <body>
            <nav class="barra_nav">
                <ul class="ir_inicio">
                <li><a id="direc_inicio" href="index.php">Inicio </a></li>
                </ul>
            </nav>
            <form class="form_val_contraseña"  id="inicio-sesion" action="recuperacion_contraseña.php" method="POST" onsubmit="return validarEmail();">
                <h2> Recuperación de Contraseña</h2>
                <h5>ingresa tu correo electrónico con el cuál registraste tu cuenta. te enviaremos un código para confirma tu identidad</h5>
                <input type="email" name="email" id="email" placeholder="E-mail" >
                <input id="boton_siguiente" type="submit" value="siguiente">
            </form>

    </body>
</html>