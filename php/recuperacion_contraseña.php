    <?php
    
    $correo=$_POST['email'];

    include('coneccion.php');
    $verificarCorreo="SELECT * FROM `usuarios`";
    $query=@mysqli_query($conect,$verificarCorreo);

    while($usuario=mysqli_fetch_array($query)){
        $usuario['user_email'];
    
        if($correo===$usuario['user_email']){//si el email ingresado anteriormente es correcto se procede a enviar el mensaje        
            $codigoAcceso=rand(100000,900000);
            include("Mailer/src/PHPMailer.php");
            include("Mailer/src/SMTP.php");
            include("Mailer/src/Exception.php");
            include("Mailer/src/OAuth.php");
        
            $emailTo=$usuario['user_email'];
            $subject= "Recuperación de contraseña";
            $bodyemail="Código de acceso $codigoAcceso";

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $emailre="narusasuforever@outlook.com";
            $formname="Solares del centro";
            $host="smtp.office365.com";
            $port="587";
            $SMTPAuth="Login";
            $SMTPSecure="STARTTLS";
            $password="NerospardaDMC5";
                
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            try {
                $mail->isSMTP();
                $mail->SMTPDebug=0;
                $mail->Host = $host;
                $mail->Port =$port;
                $mail->SMTPAuth = $SMTPAuth;
                $mail->SMTPSecure =$SMTPSecure;
                $mail->Username = $emailre;
                $mail->Password = $password;
    /*$mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer'=>false,
            'verify_peer_name'=>false,
            'allow_self_signed'=>true
        )
        );*/
        
        
                $mail->setfrom($emailre, $formname);
                $mail->addAddress($emailTo);//dirección de correo al cual le vamos a enviar nuestro correo
                $mail->isHTML(true);
                $mail->Subject = $subject; 
                $mail->Body = $bodyemail;
                $mail->CharSet='UTF-8';

        if(!$mail->send()){
            echo "lo sentimos, el mensaje no se ha enviado";
        }else{
            session_start();
            $_SESSION['codigo']=$codigoAcceso;
            $_SESSION['email']=$correo;
        
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
                    <form action="cambiar_mi_contraseña.php" method="POST" onsubmit="return myCodigo();">
                        <input type="number" name="numero" id="numero" placeholder="Código">
                        <button type="submit">Siguiente</button>
                    </form>
                </main>
            </body>
            </html>

        <?php
        }

        }catch(exception $e){

            }
        }

    }
    ?>