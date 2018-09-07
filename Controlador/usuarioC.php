<?php

	$bandera = $_POST["bandera"];
	$nombreusuU = $_POST["NombreUsu_Usu"];
	$contrasenaU = $_POST["Contrasena_Usu"];
	$nombreU = $_POST["Nombre_Usu"];
	$correoU = $_POST["Correo_Usu"];
	$direccionU = $_POST["Direccion_Usu"];
	$telefonoU = $_POST["Telefono_Usu"];
	$duiU = $_POST["DUI_Usu"];

	include("../confi/Conexion.php");

	if($bandera=="GuardarUsu"){

		$sql = "INSERT INTO usuario (usuario_Usu,contrasena_Usu,nombre_Usu,correo_Usu,direccion_Usu,telefono_Usu,dui_Usu,tipo_Usu,estado_Usu) VALUES ('$nombreusuU','$contrasenaU','$nombreU','$correoU','$direccionU','$telefonoU','$duiU',1,1)";

	    $conexion = conectarMysql();

	    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	    $mensaje = "¡Registro guardado exitosamente!";
	    header("location: /phpSISAUTO/view/Usuarios.php?mensaje=".$mensaje);
	}

?>