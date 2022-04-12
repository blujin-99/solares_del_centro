<?php
$conect=@mysqli_connect('localhost','root','','solares_centro');
if(!$conect){
    echo "<h1>ha fallado la conexión</h1> <br>";
    echo mysqli_error();
}
/*while($datos=mysqli_fetch_Array($query)){
    $nombre_usuario=$datos['nombre_usuario'];
    echo $nombre_usuario."<br>" ;
}*/
?>