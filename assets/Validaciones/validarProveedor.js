    function validarProveedor(){
        var nombreE= validarNombreE(); 
        var correoE= validarCorreoE();
        var telefonoE= validarTelefonoE(); 
        var direccionE= validarDireccionE();    
        var nombreR= validarNombreR();
        var telefonoR= validarTelefonoR();  
        if (nombreE && correoE && telefonoE && direccionE && nombreR && telefonoR) {
        	$('#guardarPro').submit();
        };      
    }
   function validarNombreE(){

    if ($('#nombreEmp').val().trim()=="") {
    	notaError("El nombre de la empresa es obligatorio!");
    	return false;
    };

return true;
    }

    function validarCorreoE(){

    if ($('#correoEmp').val().trim()=="") {
        notaError("El correo es obligatorio!");
        return false;
    };

return true;
    }

    function validarTelefonoE(){

    if ($('#telefonoEmp').val().trim()=="") {
        notaError("El teléfono de la empresa es obligatorio!");
        return false;
    };

return true;
    }

     function validarDireccionE(){

    if ($('#direccionEmp').val().trim()=="") {
    	notaError("La Dirección es obligatoria!");
    	return false;
    };


return true;
    }

      function validarNombreR(){

    if ($('#nombreResp').val().trim()=="") {
    	notaError("El nombre del responsable es obligatorio!");
    	return false;
    };
    

return true;
    }

      function validarTelefonoR(){

    if ($('#telefonoResp').val().trim()=="") {
    	notaError("El teléfono del responsable es obligatorio!");
    	return false;
    };
    

return true;
    }