<?php

include("../confi/Conexion.php");
$conexion = conectarMysql();
session_start();
    $usuario = $_POST["user"];
    $contrasena = MD5($_POST["password"]);

    $sql="SELECT * FROM usuario WHERE usuario_Usu='$usuario' AND estado_Usu=1";
    $var= mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($var)){
    	if ($row['contrasena_Usu'] == $contrasena) {
    		$_SESSION['usuarioActivo']=$row;
    		header("location: /phpSISAUTO/view/index.php");
    	}else{
        $_SESSION['error']="Usuario y contraseña incorrectos";
        echo $contrasena;
    	}
    }else{
    	$_SESSION['error']="Usuario y contraseña incorrectos";
    	header("location: /phpSISAUTO/view/login.php");
    }


?>
