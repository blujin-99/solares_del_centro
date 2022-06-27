    function validar(){
    let nombre,apellido,usuario,email,contraseña,tel,expresion,exp2;
    
    nombre=document.getElementById('nombre').value;
    apellido=document.getElementById('apellido').value;
    usuario=document.getElementById('usuario').value;
    email=document.getElementById('email').value;
    contraseña=document.getElementById('contraseña').value;
    tel=document.getElementById('tel').value;
    expresion= new RegExp("^[a-zA-Z0-9ñÑ._-]+$");
    exp2= new RegExp("^[a-zA-ZñÑ]+$");
        if(nombre === "" || apellido ==="" || usuario==="" || email==="" || contraseña==="" || tel==="" ){
                alert("Debes completar todos los campos");
                return false;
            }

        if(!exp2.test(nombre)){
                alert("Ingrese solamente letras en su nombre");
                return false;
                }else{

                if(nombre.length>15){
                alert("El nombre es muy largo");
                return false;
                }
            }

        if(!exp2.test(apellido)){
                alert("Ingrese solamente letras en su apellido");
                return false;
                }else{
                if(apellido.length>30){
                alert("El apellido es muy largo");
                return false;
                }
            }
        
        if(!expresion.test(usuario)){
                alert("Ingresa unicamente letras y números en su nombre de usuario");
                return false;
        }else{
                if(usuario.length > 20){
                alert("Ingrese un cantidad de 20 de caracteres");
                return false;
                }
        }

        if(!expresion.test(contraseña)){
                alert("Ingrese solo número y letras en su contraseña");
                return false;
                }else{

                if(contraseña.length>20){
                alert("Ingrese una cantidad mínima de 8 caracteres y máxima de 20. Utilice al menos una Mayúscula y al menos un número");
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
