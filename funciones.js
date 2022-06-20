let n="pedro";
let c="san francisco";
let e=24;
$('#boton1').click(function () {
    $.post('nuevo_archivo.php',
    {
        nombre:n,
        ciudad:c,
        edad:e,
    },function(datos){
    document.write("información: "+datos);
    })
})