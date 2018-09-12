function mostrarCli(nombre,direccion,telefono,nrc,nit){
	$("#nombre").val(nombre);
	$("#direccion").val(direccion);
	$("#telefono").val(telefono);
	$("#nrc").val(nrc);
	$("#nit").val(nit);
	
}

function editarCli(nombre,direccion,telefono,nrc,nit,idcliente){
	$("#nombreCliEditar").val(nombre);
	$("#direccionCliEditar").val(direccion);
	$("#telefonoCliEditar").val(telefono);
	$("#nrcCliEditar").val(nrc);
	$("#nitCliEditar").val(nit);
	$("#idcliente").val(idcliente);
}