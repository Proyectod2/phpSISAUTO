<?php

$bandera = $_POST["bandera"];
$nombreE = $_POST["Nombre_Emp"];
$correoE = $_POST["Correo_Emp"];
$telefonoE = $_POST["Telefono_Emp"];
$direccionE = $_POST["Direccion_Emp"];
$nombreR = $_POST["Nombre_Res"];
$telefonoR = $_POST["Telefono_Res"];

include("../confi/Conexion.php");

if($bandera=="guardar"){
	$sql = "INSERT INTO proveedor (nombre_Prov,correo_Prov,telefono_Prov,direccion_Prov,nombreResp_Prov,telefonoResp_Prov) VALUES ('$nombreE','$correoE','$telefonoE','$direccionE','$nombreR','$telefonoR')";

    $conexion = conectarMysql();

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());

}

?>