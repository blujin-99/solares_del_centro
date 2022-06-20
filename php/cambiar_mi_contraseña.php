<?php

session_start();

$numero=$_POST['numero'];
$codigo=$_SESSION['codigo'];

    if($numero==$codigo){

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
        <main>
            <form action="nueva_contraseña.php" method="POST">
                <input type="text" name="nuevacontraseña" placeholder="Nueva contraseña">
                <input type="text" name="verificarcontraseña" placeholder="Verificar contraseña">
                <input type="submit" value="Cambiar">
            </form>
        </main>
    </body>
    </html>


<?php

    }else{
    
}
?>