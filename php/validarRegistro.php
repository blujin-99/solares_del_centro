<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='../JS/localidad_selec.js'></script>
    <title>Document</title>
</head>
<body>
    
<?php 

$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$protocolo=$_POST['protocolo'];
$password=$_POST['contraseña'];
$tel=$_POST['tel'];
$correo=$email.$protocolo;
    if( !preg_match("/^[a-zA-Zñ-Ñ0-9]{3,20}$/",$usuario) || !preg_match("/^[a-zA-Zñ-Ñ]{3,15}$/",$nombre) || !preg_match("/^[a-zA-Zñ-Ñ]{3,20}$/",$apellido) || !preg_match("/^[a-zA-Zñ-Ñ0-9.-_]{10,25}$/",$email) ||!preg_match("/^[a-zA-Zñ-Ñ0-9]{8,15}$/",$password) || !preg_match("/^[0-9]{10}$/",$tel)){
        header('location:error_no_registrado.php');
        exit;
        }else{
            include('coneccion.php');
            $id_localidad=$_POST['cbx_localidad'];
            $consultaUsuarios="SELECT * FROM `usuarios`";
            $query=mysqli_query($conect,$consultaUsuarios);
            while($usuarios=mysqli_fetch_array($query)){
            $usuarios['id_usuario'];
            $usuarios['nombre_usuario'];
            $usuarios['contraseña'];
            $usuarios['nivel_rango'];
            $usuarios['nombre'];
            $usuarios['apellido'];
            $usuarios['telefono'];
            $usuarios['id_localidad'];
            $usuarios['user_email'];

            if($usuarios['user_email']===$correo){
            echo "La dirección de correo ya existe";
            exit;
            }elseif($usuarios['nombre_usuario']===$usuario){
            echo "El nombre de usuario ya existe";
            exit;
                }
            }
        $contrasenaEncriptada= password_hash($password,PASSWORD_DEFAULT,array("cost"=>12));
        $registrarUsuario= "INSERT INTO `usuarios`( `nombre_usuario`, `contraseña`, `nivel_rango`, `nombre`, `apellido`, `telefono`, `id_localidad`, `user_email`) VALUES ('$usuario','$contrasenaEncriptada','2','$nombre','$apellido','$tel','$id_localidad','$correo') ";
        if($queryRegistrar=mysqli_query($conect,$registrarUsuario)){
            echo "TE HAS REGISTRADO CORRECTAMENTE!";

        }else{
            echo "No se ha realizado el registro. intentalo más tarde";
        }
    }




?>
</body>
</html>