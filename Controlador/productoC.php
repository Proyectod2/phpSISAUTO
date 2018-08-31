<?php
include("../confi/Conexion.php");

$nombrePro = $_POST['nombrePro'];
$categoria = $_POST['categoria']; 
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$anio = $_POST['anio'];
$descripcion = $_POST['descripcion'];

        
$sql = "INSERT INTO producto (nombre_Prod, categoria_Prod, marca_Prod, descripcion_Prod,ss modeloVehiculo_Prod, anioVehiculo) VALUES ('$nombrePro','$categoria', '$marca', '$descripcion', '$modelo', '$anio')";

$conexion = conectarMysql();

mysqli_query($conexion,$sql);


?>

