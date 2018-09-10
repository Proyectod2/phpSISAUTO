<?php

include("../confi/Conexion.php");
$conexion = conectarMysql();

	$bandera = $_POST["bandera"];
	$nombreE = $_POST["Nombre_Emp"];
	$correoE = $_POST["Correo_Emp"];
	$telefonoE = $_POST["Telefono_Emp"];
	$direccionE = $_POST["Direccion_Emp"];
	$nombreR = $_POST["Nombre_Res"];
	$telefonoR = $_POST["Telefono_Res"];

if($bandera=="guardar"){

	$sql = "INSERT INTO proveedor (nombre_Prov,correo_Prov,telefono_Prov,direccion_Prov,nombreResp_Prov,telefonoResp_Prov) VALUES ('$nombreE','$correoE','$telefonoE','$direccionE','$nombreR','$telefonoR')";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Proveedor.php?mensaje=".$mensaje);

}


// if ($bandera=="cnombre") {
// 	$sql="SELECT * from proveedor where nombre_Prov like '%".$_POST["nombre"]."%'";
// 	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
//     echo mysqli_num_rows($proveedor);
// }

// if ($bandera=="ccorreo") {
// 	$sql="SELECT * from proveedor where correo_Prov ";
// 	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
//     echo mysqli_num_rows($proveedor);
// }

// if ($bandera=="ctelEmp") {
// 	$sql="SELECT * from proveedor where telefono_Prov ";
// 	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
//     echo mysqli_num_rows($proveedor);
// }

// if ($bandera=="ctelResp") {
// 	$sql="SELECT * from proveedor where telefonoResp_Prov ";
// 	$proveedor = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
//     echo mysqli_num_rows($proveedor);
// }

?>