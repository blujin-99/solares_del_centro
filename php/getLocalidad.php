<?php
include('coneccion.php');
$id_provincia=$_POST['id_provincia'];

$consultaLocalidad= "SELECT localidad.id_localidad,localidad.localidad FROM  localidad LEFT JOIN provincia_localidad ON (localidad.id_localidad=provincia_localidad.id_localidad) LEFT JOIN provincias ON (provincias.id_provincia=provincia_localidad.id_provincia) WHERE provincias.id_provincia='$id_provincia' ORDER BY localidad.localidad ASC";
$queryL=mysqli_query($conect,$consultaLocalidad);
$html="<option value='0'>Selecciona localidad</option>";
while($localidad=mysqli_fetch_array($queryL)){
    $html="<option value='".$localidad['id_localidad']."'>".$localidad['localidad']."</option>";
    echo $html;
}

?>