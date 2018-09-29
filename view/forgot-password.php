<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SISAUTO</title>
        <!-- Bootstrap core CSS-->
        <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Custom styles for this template-->
        <link href="../assets/css/sb-admin.css" rel="stylesheet">

        <link href="../assets/pNotify/pnotify.custom.min.css" rel="stylesheet">
        <style>
        body {
            background-image: url("../assets/img/auto.jpg");
        }</style>
    </head>

    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Restablecer la contraseña</div>
                <div class="card-body">
                    <div class="text-center mt-4 mb-5">
                        <h4>¿Olvidaste tu contraseña?</h4>
                        <p>Ingrese su dirección de correo electrónico y le enviaremos instrucciones sobre cómo restablecer su contraseña.</p>
                    </div>
                    <form method="post" action="../Controlador/correo.php">
                        <div class="form-group">
                            <input class="form-control" id="exampleInputEmail1" type="text" name="correo" aria-describedby="emailHelp" placeholder="Correo Electrónico">
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">
                            Restablecer la contraseña</button>
                    </form>
                    <div class="text-center">
                        <a class="d-block small" href="http://localhost/phpSISAUTO/view/login.php">
                            Página de inicio de sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

        <script src="../assets/pNotify/pnotify.custom.min.js"></script>

        <script src="../assets/Validaciones/Mensajes.js"></script>
    </body>

</html>
<?php
if (isset($_SESSION['error'])) {
     echo ("<script type='text/javascript'>
notaError('".$_SESSION['error']."');
</script>");
 unset($_SESSION['error']);
 }
?>
