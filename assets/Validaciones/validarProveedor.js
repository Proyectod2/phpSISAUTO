    async function validarProveedor(){
        var nombreE= await validarNombreE(); 
        var correoE= await validarCorreoE();
        var telefonoE= await validarTelefonoE(); 
        var direccionE= await validarDireccionE();    
        var nombreR= await validarNombreR();
        var telefonoR= await validarTelefonoR(); 
        // console.log(direccionE); 
        if (nombreE && correoE && telefonoE && direccionE && nombreR && telefonoR) {
        	$('#guardarPro').submit();
        }   
    }
   function validarNombreE(){

    if ($('#nombreEmp').val().trim()=="") {
    	notaError("El nombre de la empresa es obligatorio!");
    	return false;
    }

    else{
        var param = {
            nombre: $('#nombreEmp').val(),
            bandera: "cnombre"
        };

        return $.ajax({
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
    var regex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
    if ($('#email').val().trim()=="") {
        notaError("¡El correo es obligatorio!");
        return false;
    }else{
        var param = {
            nombre: $('#email').val(),
            bandera: "ccorreo"
        };

        return $.ajax({
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

    if(!regex.test($('#email').val())){
        notaError("¡El correo es incorrecto!");
        return false;
    }
    return true;

    }

    function validarTelefonoE(){

    if ($('#telefonoEmp').val().trim()=="") {
        notaError("El teléfono de la empresa es obligatorio!");
        return false;
    }

    if ($('#telefonoEmp').val().length!=9) {
        notaError("El telefono debe contener 8 digitos!");
        return false;
    }
return true;
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
    }
return true;
    }