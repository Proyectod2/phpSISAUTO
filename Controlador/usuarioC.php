<?php

$bandera = $_POST["bandera"];
$nombreU = $_POST["Nombre_Usu"];
$telefonoU = $_POST["Telefono_Usu"];
$correoU = $_POST["Correo_Usu"];
$direccionU = $_POST["Direccion_Usu"];
$duiU = $_POST["DUI_Usu"];
$estadoU = $_POST["estadou"];
$tipoU = $_POST["tipou"];
$nombreusuU = $_POST["NombreUsu_Usu"];
$contrasenaU = $_POST["Contrasena_Usu"];

include("../confi/Conexion.php");

if($bandera=="guardar"){
	$sql = "INSERT INTO usuario (usuario_Usu,contrasena_Usu,nombre_Usu,correo_Usu,direccion_Usu,telefono_Usu,dui_Usu,tipo_Usu,estado_Usu) VALUES ('$nombreusuU','$contrasenaU','$nombreU','$correoU','$direccionU','$duiU','$estadoU','$tipoU')";

    $conexion = conectarMysql();

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());

}

?>