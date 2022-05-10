<?php 
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$protocolo=$_POST['protocolo'];
$password=$_POST['contraseña'];
$tel=$_POST['tel'];

    if(!preg_match("/^[a-zA-Z]{3,15}$/",$nombre) || !preg_match("/^[a-zA-Z]{3,20}$/",$apellido) || !preg_match("/^[a-zA-Z0-9@.]{10,25}$/",$email)||!preg_match("/^[a-zA-Z0-9]{8,15}$/",$password)||!preg_match("/^[0-9]{10}$/",$tel)){
        header('location:error_no_registrado.php');
        exit;
    }
    echo "Te has registrado exitosamente!";
?>