<?php

$bandera = $_POST["bandera"];
$nombreCli = $_POST["NombreC"];
$direccionCli = $_POST["DireccionC"];
$telefonoCli = $_POST["TelefonoC"];
$NRCcli = $_POST["NRC"];
$NITcli = $_POST["NIT"];

include("../confi/Conexion.php");

if($bandera=="GuardarCli"){
	$sql = "INSERT INTO cliente (nombre_Cli,direccion_Cli,telefono_Cli,nrc_Cli,nit_Cli) VALUES ('$nombreCli','$direccionCli','$telefonoCli','$NRCcli','$NITcli')";

    $conexion = conectarMysql();

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Cliente.php?mensaje=".$mensaje);

}

?>