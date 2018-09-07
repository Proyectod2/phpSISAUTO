    function validarUsuario(){
        var nombre= validarNombreU(); 
        var direccion= validarDireccionU();   
        var telefono= validarTelefonoU();  
        var dui= validarDUIU();  
        if (nombre && direccion && telefono && nrc && nit) {
        	$('#guardarCli').submit();
        };      
    }

    function validarNombreU(){
        if ($('#nombre').val().trim()=="") {
            notaError("El nombre es obligatorio!");
            return false;
        };
        return true;
    }

    function validarDireccionU(){
        if ($('#direccion').val().trim()=="") {
            notaError("La Dirección es obligatoria!");
    	   return false;
        };
        return true;
    }

    function validarTelefonoU(){
        if ($('#telefono').val().trim()=="") {
        	notaError("El teléfono es obligatorio!");
        	return false;
        };
        return true;
    }


    function validarDUIU(){
        if ($('#nit').val().trim()=="") {
        	notaError("El NIT es obligatorio!");
        	return false;
        };
        return true;
    }