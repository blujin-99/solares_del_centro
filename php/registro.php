
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="../CSS/registro_usuario.css">
    <link rel="stylesheet" href="../Normalize/normalize.css">
    <script src="../JS/validar.js"></script>

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
        <select class="select_provincia" name="provincia" id="SelectA" onchange="my_fun(this.value);">
            <option value="">Selec-Provincia</option>
            <option value="1">Santa Fe</option>
            <option value="2">Buenos Aires</option>
            <option value="3">Cordoba</option>
            <option value="4">Catamarca</option>
            <option value="5">Chaco</option>
            <option value="6">Chubut</option>
            <option value="7">Corrientes</option>
            <option value="8">Entre Ríos</option>
            <option value="9">Formosa</option>
            <option value="10">Jujuy</option>
            <option value="11">La Pampa</option>
            <option value="12">La Rioja</option>
            <option value="13">Mendoza</option>
            <option value="14">Misiones</option>
            <option value="15">Neuquén</option>
            <option value="16">Río Negro</option>
            <option value="17">Salta</option>
            <option value="18">San Juan</option>
            <option value="19">San luis</option>
            <option value="20">Santa Cruz</option>
            <option value="21">Santiago del Estero</option>
            <option value="22">Tierra del Fuego</option>
            <option value="23">Tucumán</option>
            <option value="24">Ciudad de Buenos Aires</option>
        </select>
        <div id="insertar" class="select_div">
        <select class="select_localidad">
            <option value="">Selec-Localidad</option>
        </select>
        </div>
        <button class="boton_registrarse" type="submit">Registrarme</button>
        <script>
    function my_fun(str){
        if(window.XMLHttpRequest){
            xmlhttp= new XMLHttpRequest();
        }else{
            xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function(){
            if(this.readyState==4 && this.status==200){
            document.getElementById('insertar').innerHTML=this.responseText;
            }
        }
        xmlhttp.open("GET","sql_provincia_localidad.php?value="+str, true);
        xmlhttp.send();
    }
    </script>
    </form>
</body>
</html>