<?php
    session_start();
include("../confi/Conexion.php");
$conexion = conectarMysql();

	$bandera = $_POST["bandera"];


if($bandera=="guardar"){

    $nombreE = $_POST["Nombre_Emp"];
	$correoE = $_POST["Correo_Emp"];
	$telefonoE = $_POST["Telefono_Emp"];
	$direccionE = $_POST["Direccion_Emp"];
	$nombreR = $_POST["Nombre_Res"];
	$telefonoR = $_POST["Telefono_Res"];

	$sql = "INSERT INTO proveedor (nombre_Prov,correo_Prov,telefono_Prov,direccion_Prov,nombreResp_Prov,telefonoResp_Prov,tipo_Prov) VALUES ('$nombreE','$correoE','$telefonoE','$direccionE','$nombreR','$telefonoR',1)";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $_SESSION['mensaje'] = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Proveedor.php?");

}

if($bandera=="EditarPro"){

    $nombreE = $_POST["Nombre_Emp"];
	$correoE = $_POST["Correo_Emp"];
	$telefonoE = $_POST["Telefono_Emp"];
	$direccionE = $_POST["Direccion_Emp"];
	$nombreR = $_POST["Nombre_Res"];
	$telefonoR = $_POST["Telefono_Res"];
	$descripcionE = $_POST["descripcion"];
	$idproveedor = $_POST["idproveedor"];

	$sql = "UPDATE proveedor set nombre_Prov='$nombreE',correo_Prov='$correoE',telefono_Prov='$telefonoE',direccion_Prov='$direccionE',nombreResp_Prov='$nombreR',telefonoResp_Prov='$telefonoR',descripcion_Prov='$descripcionE' where idProveedor = '$idproveedor'";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $_SESSION['mensaje'] ="Registro editado exitosamente";
    header("location: /phpSISAUTO/view/Proveedor.php");

}

if ($bandera=="cambio") {

	$sql = "UPDATE proveedor set tipo_Prov='".$_POST["valor"]."' where idProveedor = '".$_POST["id"]."'";
	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
		$aux = 0;
		$_SESSION['mensaje'] ="Proveedor dado de alta exitosamente";
		// $mensaje = "Proveedor dado de alta exitosamente";
	}else{
		$aux = 1;
		$_SESSION['mensaje'] ="Proveedor dado de baja exitosamente";
	}
    header("location: /phpSISAUTO/view/Proveedor.php?tipo=".$aux."&mensaje=".$mensaje);
}

if ($bandera=="cnombre") {
	$sql="SELECT * from proveedor where nombre_Prov like '".$_POST["nombre"]."'";
	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($proveedor);
}

if ($bandera=="ccorreo") {
	$sql="SELECT * from proveedor where correo_Prov = BINARY '".$_POST["correo"]."'";
	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($proveedor);
}

if ($bandera=="ctelEmp") {
	$sql="SELECT * from proveedor where telefono_Prov like '".$_POST["telefono"]."' ";
	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($proveedor);
}

if ($bandera=="ctelResp") {
	$sql="SELECT * from proveedor where telefonoResp_Prov like '".$_POST["telefonoR"]."'";
	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
    echo mysqli_num_rows($proveedor);
}

?>