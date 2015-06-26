/**
 * Created by hyuchiha on 27/04/15.
 */

var user = "luffy";
var password= "luffyluffy";

function validar(){
    var usuario = document.getElementById("user").value;
    var contra = document.getElementById("password").value;


    if(!validarForm(usuario, contra)){
        return false;
    }else{
        if(notSecurePassword(contra)){
            alert("La contraseña debe ser de almenos 8 caracteres");
            document.getElementsByName("password").value ="";
            document.fValida.password.focus();
            return false;
        }else{
            if(canlogin(usuario, contra)){
                alert("Bienvenido");
                return true;
            }else{
                alert("Usuario no valido");
                return false;
            }
        }
    }


}

function canlogin(usuario, contra){
    return (usuario == user && contra == password);

}

function vacio(word) {
    for ( i = 0; i < word.length; i++ ) {
        if ( word.charAt(i) != " " ) {
            return true
        }
    }
    return false
}

function notSecurePassword(word){
    return word.length <8;
}

function validarForm(usuario, contra){
    if(usuario.length == 0 || !vacio(usuario)){
        alert("Tiene que escribir su nombre");
        document.getElementsByName("user").value ="";
        document.fValida.user.focus();
        return false;
    }

    if(contra.length == 0 || !vacio(contra)){
        alert("Tiene que escribir tu contraseña");
        document.getElementsByName("contra").value ="";
        document.fValida.password.focus();
        return false;
    }

    return true;
}

function noEnviar(){
    var nombre = document.getElementById("nombre").value;
    var comentario = document.getElementById("comentario").value;

    if(comentario != "" || nombre != ""){
        alert("El correo ha sido enviado!");
    }
    nombre.value ="";
    comentario.value="";
    return false;
}