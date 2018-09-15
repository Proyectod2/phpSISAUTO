async function validarUsuario(){
    var nombreU = await validarNombreU();    
    var telefonoU = await validarTelefonoU();
    var correoU = await validarCorreoU(); 
    var direccionU = await validarDireccionU();
    var duiU = await validarDUIU();
    var nombreusuU = await validarNombreUsu();
    var contrasenaU = await validarContrasenaU();
    var contrasenaU2 = await validarContrasenaU2();  
    if (nombreU && telefonoU && correoU == 0 && direccionU && duiU == 0 && nombreusuU == 0 && contrasenaU && contrasenaU2){
    	$('#guardarUsu').submit();
    }; 
}

function validarNombreU(){
    if ($('#nombreUsu').val().trim() == "") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }
    return true;
}

function validarTelefonoU(){
    if ($('#telefonoUsu').val().trim() == "") {
        notaError("¡El teléfono es obligatorio!");
        return false;
    }
    if($('#telefonoUsu').val().length < 8){
        notaError("¡El telefono debe tener 8 digitos!");
        return false;
    }
    return true;
}

function validarCorreoU(){
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if ($('#email').val().trim() == "") {
        notaError("¡El correo es obligatorio!");
        return false;
    }else if(!regex.test($('#email').val())){
        notaError("¡El correo es incorrecto!");
        return false;
    }else{
        var param = {
            correo: $('#email').val(),
            bandera: "ucorreo"
        };

        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                if (data == 0) {
                    return true;
                }else{
                   notaError("¡El correo ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
}

function validarDireccionU(){
    if ($('#direccionUsu').val().trim()=="") {
        notaError("¡La dirección es obligatoria!");
        return false;
    }
    return true;
}

function validarDUIU(){
    if ($('#duiUsu').val().trim() == "") {
    	notaError("¡El DUI es obligatorio!");
    	return false;
    }else if($('#duiUsu').val().length < 10){
        notaError("¡El DUI debe contener los 10 caracteres!");
        return false;
    }else{
        var param = {
            dui: $('#duiUsu').val(),
            bandera: "udui"
        };
        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                if (data == 0) {
                    return true;
                }else{
                   notaError("¡El DUI ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
}

function validarNombreUsu(){
    if ($('#nombreusuUsu').val().trim() == "") {
        notaError("¡El nombre de usuario es obligatorio!");
        return false;
    }else if($('#nombreusuUsu').val().length < 4){
        notaError("¡El nombre de usuario debe tener al menos 4 caracteres!");
        return false;
    }else{
        var param = {
            nombreusuario: $('#nombreusuUsu').val(),
            bandera: "unombreusuario"
        };
        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/usuarioC.php",
            method: "post",
            success: function(data){
                if (data == 0) {
                    return true;
                }else{
                   notaError("¡El nombre de usuario ingresado no se encuentra disponible!"); 
                   return false;
                }
            }
        });
    }
}

function validarContrasenaU(){
    if ($('#contrasenaUsu').val().trim() == "") {
        notaError("¡La contraseña de usuario es obligatoria!");
        return false;
    }
    if($('#contrasenaUsu').val().length < 6){
        notaError("¡La contraseña debe tener al menos 6 caracteres!");
        return false;
    }
    return true;
}

function validarContrasenaU2(){
    if ($('#contrasenaUsu2').val().trim() == "") {
        notaError("¡La verificación de contraseña es obligatoria!");
        return false;
    }
    if($('#contrasenaUsu2').val().length < 6 || $('#contrasenaUsu2').val().length > 8){
        notaError("¡La confirmación de contraseña deben coincidir!");
        return false;
    }
    return true;
}
//-------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------
async function validareditarUsuario(){
    var nombreU = await validareditarNombreU();    
    var telefonoU = await validareditarTelefonoU();
    var direccionU = await validareditarDireccionU(); 
    if (nombreU && telefonoU && direccionU){
        $('#editarUsu').submit();
    }; 
}

function validareditarNombreU(){
    if ($('#editarnombreUsu').val().trim() == "") {
        notaError("¡El nombre es obligatorio!");
        return false;
    }
    return true;
}

function validareditarTelefonoU(){
    if ($('#editartelefonoUsu').val().trim() == "") {
        notaError("¡El teléfono es obligatorio!");
        return false;
    }
    if($('#editartelefonoUsu').val().length < 8){
        notaError("¡El telefono debe tener 8 digitos!");
        return false;
    }
    return true;
}


function validareditarDireccionU(){
    if ($('#editardireccionUsu').val().trim()=="") {
        notaError("¡La dirección es obligatoria!");
        return false;
    }
    return true;
}

