function validarProducto() {
    var nombre = validarNombreP();
    var categoria = validarCategoriaP();
    var marca = validarMarcaP();
    var modelo = validarModeloP();
    var anio = validarAnioP();
    var descripcion = validarDescripcionP();
    if (nombre && categoria && marca && modelo && anio && descripcion) {
        $('#guardarProd').submit();
    }
    ;
}

function validarNombreP() {

    if ($('#nombreP').val().trim()=="") {
        notaError("El nombre es obligatorio!");
        return false;
    }
    ;

    return true;
}

function validarCategoriaP() {

    if ($('#categoriaP').val().trim()=="") {
        notaError("La categoria es obligatorio!");
        return false;
    }
    ;

    return true;
}

function validarMarcaP() {

    if ($('#marcaP').val().trim()=="") {
        notaError("La marca es obligatorio!");
        return false;
    }
    
    return true;
}

function validarModeloP() {

    if ($('#modeloP').val().trim()=="") {
        notaError("El modelo es obligatorio!");
        return false;
    }
    ;

    return true;
}

function validarAnioP() {

    if ($('#anioP').val().trim()=="") {
        notaError("El año es obligatorio!");
        return false;
    }
    ;

    return true;
}

function validarDescripcionP() {

    if ($('#descripcionP').val().trim()=="") {
        notaError("La descripcion es obligatorio!");
        return false;
    }
    ;

    return true;
}