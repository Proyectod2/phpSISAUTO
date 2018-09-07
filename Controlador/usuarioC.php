<?php

	$bandera = $_POST["bandera"];
	$nombreusuUs = $_POST["NombreUsu_Usu"];
	$contrasenaUs = $_POST["Contrasena_Usu"];
	$nombreUs = $_POST["Nombre_Usu"];
	$correoUs = $_POST["Correo_Usu"];
	$direccionUs = $_POST["Direccion_Usu"];
	$telefonoUs = $_POST["Telefono_Usu"];
	$duiUs = $_POST["DUI_Usu"];

	include("../confi/Conexion.php");

	if($bandera=="GuardarUsu"){

		$sql = "INSERT INTO usuario (usuario_Usu,contrasena_Usu,nombre_Usu,correo_Usu,direccion_Usu,telefono_Usu,dui_Usu,tipo_Usu,estado_Usu) VALUES ('$nombreusuUs','$contrasenaUs','$nombreUs','$correoUs','$direccionUs','$telefonoUs','$duiUs',1,1)";

	    $conexion = conectarMysql();

	    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	    $mensaje = "¡Registro guardado exitosamente!";
	    header("location: /phpSISAUTO/view/Usuarios.php?mensaje=".$mensaje);
	}

?>