function validar(){
    var nombre,apellido, email,contraseña,tel;
    
    nombre=document.getElementById('nombre').value;
    apellido=document.getElementById('apellido').value;
    email=document.getElementById('email').validar;
    contraseña=document.getElementById('contraseña').value;
    tel=document.getElementById('tel').value;
    if(nombre === "" || apellido ==="" || email==="" || contraseña==="" || tel==="" ){
        alert("Debes completar todos los campos");
        return false;
    }
    if(nombre.length>15){
    alert("El nombre es muy largo");
    return false;
    }
    if(apellido.length>30){
        alert("El apellido es muy largo");
        return false;
    }
    if(email.length>50){
        alert("Ingrese una dirección de correo más corta");
        return false;
    }
    if(contraseña.length>20){
    alert("Ingrese una cantidad de 20 o menos de caracteres");
    return false;
    }
    if(tel.length>10){
    alert("solo hasta 10 números, sin 0 ni +54");
    return false;
    }
}
