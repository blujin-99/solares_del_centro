<?php 
include('coneccion.php');
$consulta="SELECT provincias.id_provincia, provincias.provincia FROM provincias ORDER BY provincia ASC";
$query=mysqli_query($conect,$consulta);
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../CSS/registro_usuario.css">
    <link rel="stylesheet" href="../Normalize/normalize.css">
    <script src="../JS/validar.js"></script>
    <script src="../JS/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#cbx_provincia").change(function(){
                $("#cbx_provincia option:selected").each(function(){
                    id_provincia = $(this).val();
                    $.post("getLocalidad.php",{id_provincia: id_provincia},function(data){
                        $("#cbx_localidad").html(data);
                    });
                });
            });

        })
    </script>
    <title>Registrarse</title>
    </head>
    
    <body class="cuerpo">

    <nav class="barra_nav">
        <ul class="ir_inicio">
            <li><a id="direc_inicio" href="index.php">Inicio </a></li>
        </ul>
    </nav>

    <form class="form_registro" method="post" action="validarRegistro.php" onsubmit="return validar();">
        <h1 id="crear_cuenta">Crear Mi Cuenta</h1>

        <input type="text" name="usuario" id="usuario" placeholder="Nombre de usuario">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        <input type="text" name="email" id="email" placeholder="E-mail">

        <select class="select_dominio" name="protocolo">
            <option  value="@hotmail.com">@hotmail.com</option>
            <option  value="@outlook.com">@outlook.com</option>
            <option  value="@yahoo.com">@yahoo.com</option>
            <option  value="@gmail.com">@gmail.com</option>
        </select>

        <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
        <input type="tel" name="tel" id="tel" placeholder="Teléfono">

        <div>
            selecciona provincia
            <select  id="cbx_provincia" name="cbx_provincia">
                <option value="0">Seleccionar provincia</option>
                <?php while($provincias=mysqli_fetch_array($query)){?>
                <option value="<?php echo $provincias['id_provincia']; ?>"><?php echo $provincias['provincia']; ?></option>
                <?php } ?>
            </select>
        </div>

        <div>
        Selecciona localidad
        <select id="cbx_localidad" name="cbx_localidad" class="select_div">
            
        </select>
        </div>

        <button class="boton_registrarse" type="submit">Registrarme</button>
    </form>
</body>
</html>