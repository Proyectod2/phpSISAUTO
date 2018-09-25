<?php

include("../confi/Conexion.php");
$conexion = conectarMysql();

    $usuario = $_POST["user"];
    $contrasena = md5($_POST["password"]);

    $sql="SELECT * FROM usuario WHERE usuario_Usu='$usuario'";
    $var= mysqli_query($conexion,$sql) or die ("Error a Conectar en la BD".mysqli_connect_error());
    if ($row= mysqli_fetch_assoc($var)){
    	if ($row['contrasena_Usu']== $contrasena) {
    		session_start();
    		$_SESSION['usuarioActivo']=$row;
    		header("location: /phpSISAUTO/view/index.php");
    	}else{
    	echo $row['contrasena_Usu']."<br>";
    	echo $contrasena;
    	}
    }else{
    	$_SESSION['error']="Usuario y Contraseña Incorrectos";
    	header("location: /phpSISAUTO/view/login.html");
    }


?>