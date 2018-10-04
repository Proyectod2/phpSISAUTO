<?php

include("../confi/Conexion.php");
$conexion = conectarMysql();

$bandera = $_POST["bandera"];

if ($bandera == "guardar") {
    $codigo = $_POST["codigoPro"];
    $nombrePro = $_POST["nombrePro"];
    $categoria = $_POST["categorias"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $anio = $_POST["anio"];
    $descripcion = $_POST["descripcion"];

   

    $sql = "INSERT INTO producto (nombre_Prod,categoria_Prod,marca_Prod,descripcion_Prod,modeloVehiculo_Prod,anioVehiculo_Prod,codigo_Prod,tipo_Prod) VALUES ('$nombrePro','$categoria','$marca','$descripcion','$modelo','$anio','$codigo',1)";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro guardado exitosamente";
    header("location: /phpSISAUTO/view/Producto.php?mensaje=".$mensaje);
}

if ($bandera == "EditarProd") {
    $codigo = $_POST["codigoPro"];
    $nombrePro = $_POST["nombrePro"];
    $categoria = $_POST["categorias"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $anio = $_POST["anio"];
    $descripcion = $_POST["descripcion"];
    $idProducto = $_POST["idProducto"];

   

    $sql = "UPDATE producto set nombre_Prod='$nombrePro', categoria_Prod='$categoria',marca_Prod='$marca',modeloVehiculo_Prod='$modelo',anioVehiculo_Prod='$anio',descripcion_Prod='$descripcion' where idProducto = 'idProducto'";

    mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    $mensaje = "Registro editado exitosamente";
    header("location: /phpSISAUTO/view/Producto.php?mensaje=".$mensaje);
}

if ($bandera=="cambio") {

	$sql = "UPDATE producto set tipo_Prod='".$_POST["valor"]."' where idProducto = '".$_POST["id"]."'";
	$producto = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
	if ($_POST["valor"]==1) {
		$aux = 0;
		$_SESSION['mensaje'] ="Producto dado de alta exitosamente";
		// $mensaje = "Proveedor dado de alta exitosamente";
	}else{
		$aux = 1;
		$_SESSION['mensaje'] ="Producto dado de baja exitosamente";
	}
    header("location: /phpSISAUTO/view/Producto.php?tipo=".$aux."");
}
?>

