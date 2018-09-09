async function validarUsuario(){
    var nombreU = await validarNombreU();    
    var telefonoU = await validarTelefonoU();
    var correoU = validarCorreoU(); 
    var direccionU = validarDireccionU();
    var duiU = validarDUIU();
    var nombreusuU = validarNombreUsu();
    var contrasenaU = validarContrasenaU();
    var contrasenaU2 = validarContrasenaU2();  
    if (nombreU && telefonoU && correoU && direccionU && duiU && nombreusuU && contrasenaU && contrasenaU2) {
    	$('#guardarUsu').submit();
    }  
}

function validarNombreU(){
    if ($('#nombreUsu').val().trim()=="") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }/*
    else{
        var param = {
            nombre: $('#nombreUsu').val(),
            bandera: "unombre",
        };
        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                console.log(data);
                if (data == 0){
                    console.log('Hola');
                    x=true;
                }else{
                    console.log('Holaaa');
                    notaError("¡El nombre ingresado ya ha sido registrado!"); 
                    x=false;
                }
                return x;
            }
        });
    }*/
    return true;
}

function validarTelefonoU(){
    if ($('#telefonoUsu').val().trim()=="") {
        notaError("¡El teléfono es obligatorio!");
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
        notaError("¡La contrasena debe tener al menos 6 caracteres!");
        return false;
    }
    return true;
}

function validarContrasenaU2(){
    if ($('#contrasenaUsu2').val().trim() == "") {
        notaError("¡La verificacion de contraseña de usuario es obligatoria!");
        return false;
    }
    return true;
}
