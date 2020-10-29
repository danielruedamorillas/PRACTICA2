function validacionForm() {
    //alert('Bienvenido');
    var email=document.getElementById("email").value;
    var password=document.getElementById("psswd").value;

   

   if (email == "" && password == "") { // si el email o la contraseña estan vacios...
        document.getElementById("message").innerHTML='<p style="color:white; Background-Color:red; border-radius: 4px;">Intentelo de nuevo</p>'; // el innerHTML hace que en el campo que indicamos se mostrara el mensaje
        document.getElementById("email").style.borderColor="red";
        document.getElementById("psswd").style.borderColor="red";
        return false; // para parar el envio de datos y se quede en la misma pagina
    }else if (email == "") {
        document.getElementById("message").innerHTML='<p style="color:white; Background-Color:red; border-radius: 4px;">Te has dejado el email vacio</p>';
        document.getElementById("email").style.borderColor="red";
        document.getElementById("psswd").style.borderColor="#ccc";
        return false;
    }else if (password == "") {
        document.getElementById("message").innerHTML='<p style="color:white; Background-Color:red;  border-radius: 4px;">Te has dejado la contraseña vacia</p>';
        document.getElementById("psswd").style.borderColor="red";
        document.getElementById("email").style.borderColor="#ccc";
        return false;
    }else{
        return true;
    }
}