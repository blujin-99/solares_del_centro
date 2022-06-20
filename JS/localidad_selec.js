
function my_function(str){
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
    xmlhttp.open("POST","sql_provincia_localidad.php?value="+str, true);
    xmlhttp.send();
}
