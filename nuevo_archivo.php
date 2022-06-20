<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php
    $nombre=$_POST['nombre'];
    $ciudad=$_POST['ciudad'];
    $edad=$_POST['edad'];
    echo $nombre." ".$ciudad." ".$edad;
    ?>
    <script src="funciones.js"></script>
</body>
</html>