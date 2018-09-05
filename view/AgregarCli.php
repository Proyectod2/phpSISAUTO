<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php include("Generalidadespantalla/apertura.php"); ?>
 
<body class="fixed-nav sticky-footer bg-dark" id="page-top">

<?php include("Generalidadespantalla/Menu.php"); ?>
   
    <div class="content-wrapper" style="background-color:#eff3f4;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="http://localhost/phpSISAUTO/view/index.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active">
                    <a href="http://localhost/phpSISAUTO/view/Cliente.php">Clientes</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Registrar Cliente</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class=""></i> Registrar Cliente</div>
                <div class="card-body">
                    <form action="../Controlador/clienteC.php"  method="POST" align="center" id="guardarCli" autocomplete="off">
                        <h5 align="center">Datos Generales</h5><br>
                        <input type="hidden" value="GuardarCli" name="bandera"></input>
                       
                        <div class="form-group row">
                            <label for="nombre" class="col-sm-12 col-md-2 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="Nombre Completo" name="NombreC" type="text" id="nombre" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion" class="col-sm-12 col-md-2 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="DireccionC" type="text" id="direccion" placeholder="Dirección" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  for="telefono" class="col-sm-12 col-md-2 col-form-label">Teléfono:</label>
                            <div  class="col-sm-12 col-md-10">
                                <input class="form-control" name="TelefonoC" type="tel" id="telefono" placeholder="XXXX-XXXX" style="width:110px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nrc" class="col-sm-12 col-md-2 col-form-label">NRC:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="NRC" type="number" id="nrc" placeholder="xxxxxxxx" style="width:150px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">NIT:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="NIT" type="number" id="nit" placeholder="XXXX-XXXX-XXX" style="width:150px;height:40px">
                            </div>
                        </div><br>
                        <hr width="75%" />
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="button" class="btn btn-success fa fa-check" onclick="validarCliente();"></button>
                            <button title="Cancelar" type="button" class="btn btn-warning fa fa-times" style="color:#fff"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <script src="../assets/Validaciones/validarCliente.js"></script>
</body>
</html>

