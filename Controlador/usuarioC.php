<?php

	include("../confi/Conexion.php");
	$conexion = conectarMysql();

	$bandera = $_POST["bandera"];

	if($bandera == "GuardarUsu"){
		$nombreusuU = $_POST["NombreUsu_Usu"];
		$contrasenaU = $_POST["Contrasena_Usu"];
		$nombreU = $_POST["Nombre_Usu"];
		$correoU = $_POST["Correo_Usu"];
		$direccionU = $_POST["Direccion_Usu"];
		$telefonoU = $_POST["Telefono_Usu"];
		$duiU = $_POST["DUI_Usu"];
		$sql = "INSERT INTO usuario (usuario_Usu,contrasena_Usu,nombre_Usu,correo_Usu,direccion_Usu,telefono_Usu,dui_Usu,tipo_Usu,estado_Usu) VALUES ('$nombreusuU',MD5('$contrasenaU'),'$nombreU','$correoU','$direccionU','$telefonoU','$duiU',1,1)";
	    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	    $mensaje = "¡Registro guardado exitosamente!";
	    header("location: /phpSISAUTO/view/Usuarios.php?mensaje=".$mensaje);
	}

	if($bandera == "EditarUsu"){
	    $nombreusuU = $_POST["NombreUsu_Usu"];
		$nombreU = $_POST["Nombre_Usu"];
		$correoU = $_POST["Correo_Usu"];
		$direccionU = $_POST["Direccion_Usu"];
		$telefonoU = $_POST["Telefono_Usu"];
		$duiU = $_POST["DUI_Usu"];
		$idusuario = $_POST["idusuario"];
		if($_POST["Tipo_Usu"] == "Administrador"){
			$sql = "UPDATE usuario set usuario_Usu = '$nombreusuU',nombre_Usu = '$nombreU',correo_Usu = '$correoU',direccion_Usu = '$direccionU',telefono_Usu = '$telefonoU',dui_Usu = '$duiU',tipo_Usu = 0,estado_Usu = 1 where idUsuario = '$idusuario'";
		}else{
			$sql = "UPDATE usuario set usuario_Usu = '$nombreusuU',nombre_Usu = '$nombreU',correo_Usu = '$correoU',direccion_Usu = '$direccionU',telefono_Usu = '$telefonoU',dui_Usu = '$duiU',tipo_Usu = 1,estado_Usu = 1 where idUsuario = '$idusuario'";
		}
		mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
		    $mensaje = "Registro editado exitosamente";
		    header("location: /phpSISAUTO/view/Usuarios.php?mensaje=".$mensaje);
	}

	if($bandera == "EditarUsuContrasena"){
		$contrasenaUa = $_POST["Contrasena_Usu"];
		echo $_POST["Contrasena_Usu"];
		$idusuarioa = $_POST["idusuarioContrasena"];
		echo $_POST["idusuarioContrasena"];
		if($_POST["tipoUsuContrasenaEditar"] == "Administrador"){
			$sql = "UPDATE usuario set contrasena_Usu = MD5('$contrasenaUa') where idUsuario = '$idusuarioa'";
		}else{
			$sql = "UPDATE usuario set contrasena_Usu = MD5('$contrasenaUa') where idUsuario = '$idusuarioa'";
		}
	    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
	    $mensaje = "Registro editado exitosamente";
	    header("location: /phpSISAUTO/view/Usuarios.php?mensaje=".$mensaje);
	}

	if ($bandera == "ucorreo"){
		$sql = "SELECT * from usuario where correo_Usu = BINARY '".$_POST["correo"]."'";
		$usuario = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	    echo mysqli_num_rows($usuario);
	}

	if ($bandera == "udui"){
		$sql = "SELECT * from usuario where dui_Usu = BINARY '".$_POST["dui"]."'";
		$usuario = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	    echo mysqli_num_rows($usuario);
	}

	if ($bandera == "unombreusuario"){
		$sql = "SELECT * from usuario where usuario_Usu = BINARY '".$_POST["nombreusuario"]."'";
		$usuario = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	    echo mysqli_num_rows($usuario);
	}

	if ($bandera == "ucontrasenaActual"){
		$sql = "SELECT * from usuario where contrasena_Usu = BINARY '".$_POST["contrasenaActual"]."'";
		$usuario = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	    echo mysqli_num_rows($usuario);
	}

	if ($bandera == "cambio") {
		$sql = "UPDATE usuario set estado_Usu = '".$_POST["valor"]."' where idUsuario = '".$_POST["id"]."'";
		$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
		if ($_POST["valor"] == 1) {
			$aux = 0;
			$mensaje = "Usuario dado de alta exitosamente";
		}else{
			$aux = 1;
			$mensaje = "Usuario dado de baja exitosamente";
		}
	    header("location: /phpSISAUTO/view/Usuarios.php?tipo=".$aux."&mensaje=".$mensaje);
	}

?>
