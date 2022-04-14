    function validar(){
    var nombre,apellido, email,contraseña,tel,expresion,exp2;
    
    nombre=document.getElementById('nombre').value;
    apellido=document.getElementById('apellido').value;
    email=document.getElementById('email').value;
    contraseña=document.getElementById('contraseña').value;
    tel=document.getElementById('tel').value;
    expresion= new RegExp("^[a-zA-Z0-9]+$");
    exp2= new RegExp("^[a-zA-Z0-9]+$");
        
        if(nombre === "" || apellido ==="" || email==="" || contraseña==="" || tel==="" ){
                alert("Debes completar todos los campos");
                return false;
            }

        if(!exp2.test(nombre)){
                alert("Ingrese solamente letras");
                return false;
                }else{

                if(nombre.length>15){
                alert("El nombre es muy largo");
                return false;
                }
            }

        if(!exp2.test(apellido)){
                alert("Ingrese solamente letras");
                return false;
                }else{

                if(apellido.length>30){
                alert("El apellido es muy largo");
                return false;
                }
            }

        if(!expresion.test(contraseña)){
                alert("Ingrese solo número y letras");
                return false;
                }else{

                if(contraseña.length>20){
                alert("Ingrese una cantidad de 20 o menos de caracteres");
                return false;
            }
        }

        if(tel.length>10 || tel.length<10){
                alert("solo hasta 10 números, sin 0 ni +54");
                return false;
            }

        if(isNaN(tel)){
                alert("Ingrese solamente números");
                return false;
            }

        if(!expresion.test(email)){
                alert("ingrese letras o números");
                return false;
                }else{
                    
                if(email.length>30){
                alert("Ingrese una dirección de correo más corta");
                return false;

                }
            }
}
