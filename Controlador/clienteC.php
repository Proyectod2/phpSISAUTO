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

if($bandera=="EditarCli"){

    $nombreCli = $_POST["nombreCli"];
	$direccionCli = $_POST["direccionCli"];
	$telefonoCli = $_POST["telefonoCli"];
	$NRCcli = $_POST["nrcCli"];
	$NITcli = $_POST["nitCli"];
	$idcliente = $_POST["idcliente"];

	$sql = "UPDATE cliente set nombre_Cli='$nombreCli',direccion_Cli='$direccionCli',telefono_Cli='$telefonoCli',nrc_Cli='$NRCcli',nit_Cli='$NITcli' where idCliente = '$idcliente'";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro editado exitosamente";
    header("location: /phpSISAUTO/view/Cliente.php?mensaje=".$mensaje);

}
if ($bandera=="cambio") {

	$sql = "UPDATE cliente set tipo_Cli='".$_POST["valor"]."' where idCliente = '".$_POST["id"]."'";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
	$aux = 0;
		$_SESSION['mensaje'] ="Cliente dado de alta exitosamente";
		// $mensaje = "Cliente dado de alta exitosamente";
	}else{
		$aux = 1;
		$_SESSION['mensaje'] ="Cliente dado de baja exitosamente";
	}
    header("location: /phpSISAUTO/view/Cliente.php?tipo=".$aux."");
 }
if ($bandera=="nombreC") {
	$sql="SELECT * from cliente where nombre_Cli like '".$_POST["nombre"]."'";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($cliente);
}

if ($bandera=="telefonoC") {
	$sql="SELECT * from cliente where telefono_Cli like '".$_POST["telefono"]."' ";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($cliente);
}

if ($bandera=="nitC") {
	$sql="SELECT * from cliente where nit_Cli like '".$_POST["nit"]."' ";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($cliente);
}

if ($bandera=="nrcC") {
	$sql="SELECT * from cliente where nrc_Cli like '".$_POST["nrc"]."' ";
	$cliente = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($cliente);
}

?>