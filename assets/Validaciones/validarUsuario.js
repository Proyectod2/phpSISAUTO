    function validarUsuario(){
        var nombreU= validarNombreU();    
        var telefonoU= validarTelefonoU();
        var correoU = validarCorreoU(); 
        var direccionU= validarDireccionU();
        var duiU= validarDUIU();
        var nombreUsu = validarNombreUsu();
        var contraseniaU = validarContraseniaU(); 
        if (nombreU && telefonoU && correoU && direccionU && duiU && nombreUsu && contraseniaU) {
        	$('#guardarUsu').submit();
        };   
    }

    function validarNombreU(){
        if ($('#nombreU').val().trim()=="") {
            notaError("¡El nombre es obligatorio!");
            return false;
        };
        return true;
    }

    function validarTelefonoU(){
        if ($('#telefonoU').val().trim()=="") {
            notaError("¡El teléfono es obligatorio!");
            return false;
        };
        return true;
    }

    function validarCorreoU(){
        if ($('#correoU').val().trim()=="") {
            notaError("¡El correo es obligatorio!");
            return false;
        };
        return true;
    }

    function validarDireccionU(){
        if ($('#direccionU').val().trim()=="") {
            notaError("¡La Dirección es obligatoria!");
    	   return false;
        };
        return true;
    }

    function validarDUIU(){
        if ($('#duiU').val().trim()=="") {
        	notaError("¡El DUI es obligatorio!");
        	return false;
        };
        return true;
    }

    function validarNombreUsu(){
        if ($('#nombreUsu').val().trim()=="") {
            notaError("¡El Nombre de Usuario es obligatorio!");
            return false;
        };
        return true;
    }

    function validarContraseniaU(){
        if ($('#contraseniaU').val().trim()=="") {
            notaError("¡La Contraseña de Usuario es obligatorio!");
            return false;
        };
        return true;
    }