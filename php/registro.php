<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../JS/validar.js"></script>
    <title>Document</title>
</head>
<body>
    <form  method="post" action="prueba2.php" onsubmit="return validar();">
        <input type="text" name="nombre" id="nombre">
        <input type="text" name="apellido" id="apellido">
        <input type="text" name="email" id="email">
        <select name="protocolo">
            <option  value="@hotmail.com">@hotmail.com</option>
            <option  value="@outlook.com">@outlook.com</option>
            <option  value="@yahoo.com">@yahoo.com</option>
            <option  value="@gmail.com">@gmail.com</option>
        </select>
        <input type="password" name="contraseña" id="contraseña">
        
        <input type="tel" name="tel" id="tel">
        <button type="submit">registrar</button>
    </form>
</body>
</html>