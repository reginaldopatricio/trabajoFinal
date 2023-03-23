function validarFormulario() {
    var nombre = document.getElementById("nombre").value;
    var apellidos = document.getElementById("apellidos").value;
    var usuario = document.getElementById("usuario").value;
    var correo = document.getElementById("correo_electronico").value;
    var password = document.getElementById("password").value;
    
    if (nombre == "") {
        alert("Por favor, ingrese su nombre");
        return false;
    }
    
    if (apellidos == "") {
        alert("Por favor, ingrese sus apellidos");
        return false;
    }
    
    if (usuario == "") {
        alert("Por favor, ingrese un nombre de usuario");
        return false;
    }
    
    if (correo == "") {
        alert("Por favor, ingrese su correo electrónico");
        return false;
    } else if (!/\S+@\S+\.\S+/.test(correo)) {
        alert("Por favor, ingrese un correo electrónico válido");
        return false;
    }
    
    if (password == "") {
        alert("Por favor, ingrese una contraseña");
        return false;
    } else if (password.length < 8 || password[0] != password[0].toUpperCase()) {
        alert("La contraseña debe tener al menos 8 caracteres y la primera letra en mayúscula");
        return false;
    }
    
    return true;
}
