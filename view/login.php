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
            background-image: url("auto.jpg");
        }</style>
    </head>


    <body class="bg-dark">
        <div class="container">
            <div class="card card-login mx-auto mt-5">
                <h1 align="center" style="font-style:">SISAUTO</h1>
                <div class="card-header">Admin</div>
                <div class="card-body">
                    <form action="../Controlador/logear.php" method="POST" autocomplete="off">
                        <div class="input-group custom input-group-lg">
                            <input type="text" name="user" class="form-control" placeholder="Usuario">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                        </div><br>
                        <div class="input-group custom input-group-lg">
                            <input type="password" name="password" class="form-control" placeholder="**********">
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                            </div>
                        </div><br>
                        <button class="btn btn-primary btn-block" type="submit">Entrar</button>
                    </form><br>
                    <div class="text-center">
                        <a class="d-block small" href="/phpSISAUTO/view/forgot-password.html">Olvidaste tu contraseña?</a>
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
