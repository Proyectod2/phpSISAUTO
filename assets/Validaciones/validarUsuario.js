async function validarUsuario(){
    var nombreU = await validarNombreU();    
    var telefonoU = await validarTelefonoU();
    var correoU = await validarCorreoU(); 
    var direccionU = await validarDireccionU();
    var duiU = await validarDUIU();
    var nombreusuU = await validarNombreUsu();
    var contrasenaU = await validarContrasenaU();
    var contrasenaU2 = await validarContrasenaU2();  
    if (nombreU && telefonoU && correoU && direccionU && duiU && nombreusuU && contrasenaU && contrasenaU2) {
    	$('#guardarUsu').submit();
    }  
}

function validarNombreU(){
    if ($('#nombreUsu').val().trim()=="") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }
    else{
        var param = {
            nombre: $('#nombreUsu').val(),
            bandera: "unombre",
        };
        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                console.log(data);
                if (data == 0){
                    return true;
                }else{
                    notaError("¡El nombre ingresado ya ha sido registrado!"); 
                    return false;
                }
            }
        });
    }
}

function validarTelefonoU(){
    if ($('#telefonoUsu').val().trim()=="") {
        notaError("¡El teléfono es obligatorio!");
        return false;
    }
    if($('#telefonoUsu').val().length<8){
        notaError("¡El telefono debe tener 8 digitos!");
        return false;
    }
    return true;
}

function validarCorreoU(){
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if ($('#email').val().trim()=="") {
        notaError("¡El correo es obligatorio!");
        return false;
    }
    if(!regex.test($('#email').val())){
        notaError("¡El correo es incorrecto!");
        return false;
    }
    return true;
}

function validarDireccionU(){
    if ($('#direccionUsu').val().trim()=="") {
        notaError("¡La Dirección es obligatoria!");
        return false;
    }
    return true;
}

function validarDUIU(){
    if ($('#duiUsu').val().trim()=="") {
    	notaError("¡El DUI es obligatorio!");
    	return false;
    }
    if($('#duiUsu').val().length<10){
        notaError("¡El DUI debe contener los 10 caracteres!");
        return false;
    }
    return true;
}

function validarNombreUsu(){
    if ($('#nombreusuUsu').val().trim()=="") {
        notaError("¡El Nombre de Usuario es obligatorio!");
        return false;
    }
    return true;
}

function validarContrasenaU(){
    if ($('#contrasenaUsu').val().trim() == "") {
        notaError("¡La contraseña de usuario es obligatoria!");
        return false;
    }
    if($('#contrasenaUsu').val().length<6){
        notaError("¡La contraseña debe tener al menos 6 caracteres!");
        return false;
    }
    return true;
}

function validarContrasenaU2(){
    if ($('#contrasenaUsu2').val().trim() == "") {
        notaError("¡La verificacion de contraseña es obligatoria!");
        return false;
    }
    if($('#contrasenaUsu2').val().length<6){
        notaError("¡La confirmacion de contraseña deben cohincidir!");
        return false;
    }
    return true;
}
