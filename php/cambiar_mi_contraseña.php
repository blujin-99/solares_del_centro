<?php
session_start();

    echo $numero=$_POST['numero'];
    echo $codigo=$_SESSION['codigo'];
    if(preg_match("/^[0-9]{6}$/",$numero) && preg_match("/^[0-9]{6}$/",$codigo)){
        if($numero==$codigo){
        
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="../JS/validarFormR_contraseña.js"></script>
    </head>
    <body>
        <main>
            <form action="nueva_contraseña.php" method="POST" onsubmit=" return cambioPass(); ">
                <input type="password" name="nuevacontraseña" id="password" placeholder="Nueva contraseña">
                <input type="password" name="verificarcontraseña" id="verificar" placeholder="Verificar contraseña">
                <input type="submit" value="Cambiar">
            </form>
        </main>
    </body>
    </html>


<?php

            }else{
    
        }
    }else{
        echo "El código no es válido";
    } 
?>