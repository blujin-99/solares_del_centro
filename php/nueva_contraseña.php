<?php 
$nueva_contraseña=$_POST['nuevacontraseña'];
$verificar_contraseña=$_POST['verificarcontraseña'];
session_start();
$_SESSION['email'];

    if(!preg_match("/^[a-zA-Zñ-Ñ0-9]{8,15}$/",$nueva_contraseña)||!preg_match("/^[a-zA-Zñ-Ñ0-9]{8,15}$/", $verificar_contraseña)){
        echo "Por favor, introduce únicamente entre Letras mayúsculas, minúsculas y números. ingresa 8 y menos de 15 caracteres";
    }else{
            if($nueva_contraseña===$verificar_contraseña){
                include('coneccion.php');
                $contrasenaEncriptada= password_hash($nueva_contraseña,PASSWORD_DEFAULT,array("cost"=>12));
                $updatepassword="UPDATE `usuarios` SET `contraseña`='$contrasenaEncriptada' WHERE `user_email`='$_SESSION[email]'";
                $query=@mysqli_query($conect,$updatepassword);
                echo "Contraseña aceptada. ya puedes usar tu nueva contraseña";
                session_destroy();
                exit;

            }else{
                echo "La nueva contraseña y la verificación no son iguales, intenta ingresar nuevamente";
        }
}
?>