function mostrarUsu(nombre,telefono,correo,direccion,dui,usuario,tipo){
	$("#nombreUsu").val(nombre);
	$("#telefonoUsu").val(telefono);
	$("#correoUsu").val(correo);
	$("#direccionUsu").val(direccion);
	$("#duiUsu").val(dui);
	$("#nombreusuUsu").val(usuario);
	if(tipo == '1'){
		var aux = 'Empleado';
	}else{
		var aux = 'Administrador';
	}
	$("#tipoUsu").val(aux);	
}

function editarUsu(nombre,telefono,correo,direccion,dui,usuario,tipo,idusuario){
	$("#editarnombreUsu").val(nombre);
	$("#editartelefonoUsu").val(telefono);
	$("#editarcorreoUsu").val(correo);
	$("#editardireccionUsu").val(direccion);
	$("#editarduiUsu").val(dui);
	$("#editarnombreusuUsu").val(usuario);
	if(tipo == '1'){
		var aux = 'Empleado';
	}else{
		var aux = 'Administrador';
	}
	$("#editartipoUsu").val(aux);	
	$("#idusuario").val(idusuario);
}