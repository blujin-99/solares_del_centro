    function cambioPass() {
        var nuevapass, verificar, expresion;
        nuevapass=document.getElementById('password').value;
        verificar= document.getElementById('verificar').value;
        expresion= new RegExp("^[a-zA-Z0-9]$");
        if(expresion.test(nuevapass)){
            alert("ingrese valores alfanumericos");
            return false;

        }
        if(expresion.test(verificar)){
            alert("ingrese valoresoooo");
            return false;
        }
    }