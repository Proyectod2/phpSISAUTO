<?php

include("../confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if($bandera=="GuardarCli"){
	$nombreCli = $_POST["NombreC"];
	$direccionCli = $_POST["DireccionC"];
	$telefonoCli = $_POST["TelefonoC"];
	$NRCcli = $_POST["NRC"];
	$NITcli = $_POST["NIT"];
	$sql = "INSERT INTO cliente (nombre_Cli,direccion_Cli,telefono_Cli,nrc_Cli,nit_Cli,tipo_Cli) VALUES ('$nombreCli','$direccionCli','$telefonoCli','$NRCcli','$NITcli',1)";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Cliente.php?mensaje=".$mensaje);

}

if ($bandera=="nombreC") {
	$sql="SELECT * from cliente where nombre_Cli like '".$_POST["nombre"]."'";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($cliente);
}
?>