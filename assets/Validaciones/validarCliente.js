   async function validarCliente(){
        var nombre= await validarNombre(); 
        var direccion= await validarDireccion();   
        var telefono= await validarTelefono();  
        var nrc= await validarNRC();
        var nit= await validarNIT();  
        if (nombre==0 && direccion && telefono && nrc && nit) {
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

    if ($('#telefono').val().trim()=="") {
    	notaError("El teléfono es obligatorio!");
    	return false;
    }else if{
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
    

return true;
    }

      function validarNRC(){

    if ($('#nrc').val().trim()=="") {
    	notaError("El NRC es obligatorio!");
    	return false;
    };
    

return true;
    }

      function validarNIT(){

    if ($('#nit').val().trim()=="") {
    	notaError("El NIT es obligatorio!");
    	return false;
    };
    

return true;
    }