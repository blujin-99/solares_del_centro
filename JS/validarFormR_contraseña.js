function validarEmail(){
        let email,expresion;
        email = document.getElementById('email').value;
        expresion = new RegExp("^[a-zA-Z0-9ñÑ._@-]+$");
    
        if(!expresion.test(email)){
            alert("INGRESE LETRAS DE LA a-z, NÚMEROS 0-9 Y/O . - _");
            return false;
        }
} 

function myCodigo(){
        let numero;
        numero=document.getElementById('numero').value;

        if(isNaN(numero)){
            alert("Ingrese únicamente números");
            return false;
        }
}

function cambioPass() {
    var nuevapass, verificar, expresion;
    nuevapass=document.getElementById('password').value;
    verificar= document.getElementById('verificar').value;
    expresion= new RegExp("^[a-zA-Z0-9]+$");
    if(!expresion.test(nuevapass)){
        alert("ingrese valores alfanumericos en la contraseña");
        return false;

    }
    if(!expresion.test(verificar)){
        alert("La verificación de la contraseña debe ser igual a la ingresada anteriormente");
        return false;
    }
}