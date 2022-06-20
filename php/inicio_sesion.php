<?php
    session_start();
    include('coneccion.php');
    $email=@mysqli_real_escape_string($conect,$_POST['email']);
    $contraseña=@mysqli_real_escape_string($conect,$_POST['contraseña']);
    $consulta="SELECT * FROM `usuarios`";
    $query=@mysqli_query($conect,$consulta);
        while($datos=@mysqli_fetch_array($query)){
            $datos['id_usuario'];
            $datos['nombre_usuario'];
            $datos['contraseña'];
            $datos['nivel_rango'];
            $datos['nombre'];
            $datos['apellido'];
            $datos['telefono'];
            $datos['id_localidad'];
            $datos['user_email'];
                if($email===$datos['user_email'] && password_verify($contraseña,$datos['contraseña'])){
                $_SESSION['id_usuario']=$datos['id_usuario'];
                $_SESSION['nombre_usuario']=$datos['nombre_usuario'];
                $_SESSION['contraseña']=$datos['contraseña'];
                $_SESSION['nivel_rango']=$datos['nivel_rango'];
                $_SESSION['nombre']=$datos['nombre'];
                $_SESSION['apellido']=$datos['apellido'];
                $_SESSION['telefono']=$datos['telefono'];
                $_SESSION['id_localidad']=$datos['id_localidad'];
                $_SESSION['user_email']=$datos['user_email'];
                if($_SESSION['nivel_rango']==1){
                header('location:administrador.php');
                }elseif($_SESSION['nivel_rango']==2){
                header('location:usuario.php');
                }
                }
                }
                echo "LO SENTIMOS, LA CONTRASEÑA O CORREO ES INCORRECTO";
        ?>
