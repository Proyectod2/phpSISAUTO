function mostrarPro(nombre,correo,telefono,direccion,nombreR,telefonoR){
	$("#nombrePro").val(nombre);
	$("#correoPro").val(correo);
	$("#telefonoPro").val(telefono);
	$("#direccionPro").val(direccion);
	$("#nombreRes").val(nombreR);
	$("#telefonoRes").val(telefonoR);

	
}

function editarPro(nombre,correo,telefono,direccion,nombreR,telefonoR,idproveedor){
	$("#nombreProEditar").val(nombre);
	$("#correoProEditar").val(correo);
	$("#telefonoProEditar").val(telefono);
	$("#direccionProEditar").val(direccion);
	$("#nombreResEditar").val(nombreR);
	$("#telefonoResEditar").val(telefonoR);
	$("#idproveedor").val(idproveedor);
}