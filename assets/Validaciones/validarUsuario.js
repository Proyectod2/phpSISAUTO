function validarUsuario(){
    var nombreU = validarNombreU();    
    var telefonoU = validarTelefonoU();
    var correoU = validarCorreoU(); 
    var direccionU = validarDireccionU();
    var duiU = validarDUIU();
    var nombreusuU = validarNombreUsu();
    var contrasenaU = validarContrasenaU(); 
    if (nombreU && telefonoU && correoU && direccionU && duiU && nombreusuU && contrasenaU) {
    	$('#guardarUsu').submit();
    }  
}

function validarNombreU(){
    if ($('#nombreUsu').val().trim()=="") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }
    /*else{
        var param = {
            nombre: $('#nombreUsu').val(),
            bandera: "unombre",
        };
        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                if (data==0){
                    return true;
                }else{
                    notaError("¡El nombre ingresado ya ha sido registrado!"); 
                    return false;
                }
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
    if ($('#email').val().trim()=="") {
        notaError("¡El correo es obligatorio!");
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
        notaError("¡La Contraseña de Usuario es obligatorio!");
        return false;
    }
    return true;

}
