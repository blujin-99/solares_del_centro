<?php
    session_start();
        if(isset($_SESSION['user_email']) && isset($_SESSION['contraseña'])){
        if($_SESSION['nivel_rango']==1){
            echo "Bienvenido usuario ".$_SESSION['nombre_usuario'];
            echo $_SESSION['contraseña'];
?>

    <!DOCTYPE html>
        <html lang="en">
            <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            </head>
        <body>
            <h1> HOLA AQUI ESTAN LOS TURNOS DE LOS CLIENTES </h1>
            <a href="administrador.php">perfil</a>
            <a href="cierre_sesion.php">Cerrar sesion</a>
        </body>
        </html>
<?php
        }else{
        header('location:error.php');
        }
        }else{
        header('location:index.php');
        }
?>