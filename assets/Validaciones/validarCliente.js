   async function validarCliente(){
        var nombre= await validarNombre(); 
        var direccion= await validarDireccion();   
        var telefono= await validarTelefono();  
        var nrc= await validarNRC();
        var nit= await validarNIT();  
        if (nombre==0 && direccion && telefono==0 && nrc==0 && nit==0) {
        	$('#guardarCli').submit();
        };      
    }
   function validarNombre(){

    if ($('#nombre').val().trim()=="") {
    	notaError("El nombre es obligatorio!");
    	return false;
    }else{
        var param = {
            nombre: $('#nombre').val(),
            bandera: "nombreC"
        };

        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/clienteC.php",
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

return true;
    }

     function validarDireccion(){

    if ($('#direccion').val().trim()=="") {
    	notaError("La Dirección es obligatoria!");
    	return false;
    }


return true;
    }
      function validarTelefono(){

    if ($('#telefono').val().length!=9) {
        notaError("El teléfono debe contener 8 dígitos!");
        return true;
    }
    else if ($('#telefono').val().trim()=="") {
    	notaError("El teléfono es obligatorio!");
    	return true;
    }else{
        var param = {
            telefono: $('#telefono').val(),
            bandera: "telefonoC"
        };

        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/clienteC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El teléfono ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    
    }

      function validarNRC(){

    if ($('#nrc').val().length!=8) {
        notaError("El NRC debe contener 7 dígitos!");
        return true;
    }
    else if ($('#nrc').val().trim()=="") {
    	notaError("El NRC es obligatorio!");
    	return true;
    }
    else{
        var param = {
            nrc: $('#nrc').val(),
            bandera: "nrcC"
        };

        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/clienteC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El NCR ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }

    }

      function validarNIT(){

    if ($('#nit').val().length!=17) {
        notaError("El NIT debe contener 14 dígitos!");
        return true;
    }
    else if ($('#nit').val().trim()=="") {
    	notaError("El NIT es obligatorio!");
    	return true;
    }else{
        var param = {
            nit: $('#nit').val(),
            bandera: "nitC"
        };

        return $.ajax({
            data: param,
            url:"/phpSISAUTO/Controlador/clienteC.php",
            method: "post",
            success: function(data){
                if (data==0) {
                    return true;
                }else{
                   notaError("El NIT ingresado ya ha sido registrado!"); 
                   return false;
                }
            }
        });
    }
    
    }