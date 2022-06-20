
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="../CSS/registro_usuario.css">
        <link rel="stylesheet" href="../Normalize/normalize.css">
        <title>Document</title>
    </head>
    <script>
    </script>
    <body>
    <?php 
    include('coneccion.php');
    $val=$_GET['value'];
    $val_M= @mysqli_real_escape_string($conect,$val);
    $consultaProvincias="SELECT localidad.localidad FROM `provincias` LEFT JOIN `provincia_localidad` ON(provincia_localidad.id_provincia=provincias.id_provincia) left JOIN `localidad` ON(localidad.id_localidad=provincia_localidad.id_localidad) WHERE provincias.id_provincia='$val_M' ORDER BY localidad.localidad ASC";
    $query=@mysqli_query($conect,$consultaProvincias);
    ?>
    <select class='select_localidad' id='localidades' name='localidad' onchange='my_function(this.value);'>"
        <?php 
        while($rows=mysqli_fetch_array($query)){
        echo "<option value='$rows[id_localidad]'>".$rows['localidad']."</option>";
        } 
        ?>
        </select>;
    
    </body>
    </html>
    
    



