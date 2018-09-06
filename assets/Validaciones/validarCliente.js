    function validarCliente(){
        var nombre= validarNombre(); 
        var direccion= validarDireccion();   
        var telefono= validarTelefono();  
        var nrc= validarNRC();
        var nit= validarNIT();  
        if (nombre && direccion && telefono && nrc && nit) {
        	$('#guardarCli').submit();
        };      
    }
   function validarNombre(){

    if ($('#nombre').val().trim()=="") {
    	notaError("El nombre es obligatorio!");
    	return false;
    };

return true;
    }

     function validarDireccion(){

    if ($('#direccion').val().trim()=="") {
    	notaError("La Dirección es obligatoria!");
    	return false;
    };


return true;
    }
      function validarTelefono(){

    if ($('#telefono').val().trim()=="") {
    	notaError("El teléfono es obligatorio!");
    	return false;
    };
    

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