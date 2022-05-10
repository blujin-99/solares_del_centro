<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../JS/validar.js"></script>
    <link rel="stylesheet"  href="../CSS/registro_usuario.css">
    <link rel="stylesheet" href="../Normalize/normalize.css">
    <title>Document</title>
</head>
<body class="cuerpo">
    <nav class="barra_nav">
        <ul class="ir_inicio">
            <li><a id="direc_inicio" href="index.php">Inicio </a></li>
        </ul>
    </nav>
    <form class="form_registro" method="post" action="validarRegistro.php" onsubmit="return validar();">
    <h1 id="crear_cuenta">Crear Mi Cuenta</h1>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <input type="text" name="email" id="email" placeholder="E-mail">
        <select class="select_dominio" name="protocolo">
            <option  value="@hotmail.com">@hotmail.com</option>
            <option  value="@outlook.com">@outlook.com</option>
            <option  value="@yahoo.com">@yahoo.com</option>
            <option  value="@gmail.com">@gmail.com</option>
        </select>
        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
        <input type="tel" name="tel" id="tel" placeholder="Teléfono">
        <button class="boton_registrarse" type="submit">Registrarme</button>
    </form>
</body>
</html>