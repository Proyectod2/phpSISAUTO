    async function validarProveedor(){
        var nombreE= await validarNombreE(); 
        var correoE= await validarCorreoE();
        var telefonoE= await validarTelefonoE(); 
        var direccionE= await validarDireccionE();    
        var nombreR= await validarNombreR();
        var telefonoR= await validarTelefonoR();  
        if (nombreE && correoE && telefonoE && direccionE && nombreR && telefonoR) {
        	$('#guardarPro').submit();
        };      
    }
   function validarNombreE(){

    if ($('#nombreEmp').val().trim()=="") {
    	notaError("El nombre de la empresa es obligatorio!");
    	return false;
    }else{
        var param = {
            nombre: $('#nombreEmp').val(),
            bandera: "cnombre",
        };

        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/proveedorC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El nombre ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    }

    function validarCorreoE(){

    if ($('#correoEmp').val().trim()=="") {
        notaError("El correo es obligatorio!");
        return false;
    }else{
        var param = {
            correo: $('#correoEmp').val(),
            bandera: "ccorreo",
        };

        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/proveedorC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El correo ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    }

    function validarTelefonoE(){

    if ($('#telefonoEmp').val().trim()=="") {
        notaError("El teléfono de la empresa es obligatorio!");
        return false;
    }else{
        var param = {
            telEmp: $('#telefonoEmp').val(),
            bandera: "ctelEmp",
        };

        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/proveedorC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El telefono ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    }

     function validarDireccionE(){

    if ($('#direccionEmp').val().trim()=="") {
    	notaError("La Dirección es obligatoria!");
    	return false;
    }


return true;
    }

      function validarNombreR(){

    if ($('#nombreResp').val().trim()=="") {
    	notaError("El nombre del responsable es obligatorio!");
    	return false;
    }
    

return true;
    }

      function validarTelefonoR(){

    if ($('#telefonoResp').val().trim()=="") {
    	notaError("El teléfono del responsable es obligatorio!");
    	return false;
    }else{
        var param = {
            telResp: $('#telefonoResp').val(),
            bandera: "ctelResp",
        };

        $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/proveedorC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El telefono ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    }