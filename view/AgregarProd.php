<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <a class="navbar-brand" href="http://localhost/phpSISAUTO/view/index.php">SISAUTO</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="navbar-brand brand-logo" >
                        <img src="../assets/img/aut3.png" alt="logo" />
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link" href="http://localhost/phpSISAUTO/view/NuevaVenta.php">
                        <i class="fa fa-dollar"></i>
                        <span class="nav-link-text "> Vender</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
                        <i class="fa fa-cart-plus"></i>
                        <span class="nav-link-text">Compras/Ventas</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Compras.php"><span class="fa fa-list"> Compras</span></a>
                        </li>
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Ventas.php"> Ventas</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                        <i class="fa fa-folder"></i>
                        <span class="nav-link-text">Catalogo</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Cliente.php"><span class="fa fa-user"> Cliente</span></a>
                        </li>
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Proveedor.php"><span class="fa fa-user"> Proveedor</span></a>
                        </li>
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Producto.php"><span class="fa fa-tags"> Producto</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsenuevo" data-parent="#exampleAccordion">
                        <i class="fa fa-area-chart"></i>
                        <span class="nav-link-text">Inventario</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapsenuevo">
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Inventario.php"><span class="fa fa-book"> Inventario Principal</span></a>
                        </li>
                        <li>
                            <a href="">seccion1</a>
                        </li>
                        <li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                        <i class="fa fa-unlock-alt"></i>
                        <span class="nav-link-text">Seguridad</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Bitacora.php"><span class="fa fa-history"> Bitacora</span></a>
                        </li>
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Usuarios.php">Control Usuarios</a>
                        </li>
                        <li>
                            <a href="http://localhost/phpSISAUTO/view/Back.php">Administrar Backup</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" >
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                        <h6 class="dropdown-header">New Messages:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>David Miller</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>Jane Smith</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <strong>John Doe</strong>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all messages</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-fw fa-bell"></i>
                        <span class="d-lg-none">Alerts
                            <span class="badge badge-pill badge-warning">6 New</span>
                        </span>
                        <span class="indicator text-warning d-none d-lg-block">
                            <i class="fa fa-fw fa-circle"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                        <h6 class="dropdown-header">New Alerts:</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-danger">
                                <strong>
                                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <span class="text-success">
                                <strong>
                                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                            </span>
                            <span class="small float-right text-muted">11:21 AM</span>
                            <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item small" href="#">View all alerts</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                        <i class="fa fa-fw fa-sign-out"></i>Cerra Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper" style="background-color:#eff3f4;">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="..view/index.html">Inicio</a>

                <li class="breadcrumb-item active">
                    <a href="http://localhost/phpSISAUTO/view/Producto.php">Productos</a>
                </li>
                <li class="breadcrumb-item">
                    <a>Registrar Producto</a>
                </li>
            </ol>
            <!-- Example DataTables Card-->
            <!--<a class="pull-right" href="">-->
                <!--<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">-->
                    <!--Nuevo-->
                    <!--<span class="fa fa-new"></span>-->
                <!--</button>-->
            <!--</a><br><br>-->
                <div class="card-header">
                    <i class=""></i> Registrar Producto</div>
                <div class="card-body">
                    <form action="../Controlador/productoC.php" align="center" method="POST" name="">
                        <input type="hidden" value="guardar" name="bandera"></input>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="nombrePro" class="form-control" placeholder="Nombre del Producto" type="text" id="empresa" style="width:600px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Categoria:</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="categorias" style="width:600px;height:40px" class="form-control"> 
                                    <option value="">[Selecionar Categoria]</option>
                                    <option value="Suspension">Suspensión</option>
                                    <option value="Direccion">Dirección</option>
                                    <option value="Electrico">Eléctrico</option>
                                    <option value="Friccion">Fricción</option>
                                    <option value="Rodamiento">Rodamiento</option>
                                    <option value="">Fajas</option>
                                    <option value="">Carburación</option>
                                    <option value="">Bomba</option>
                                    <option value="">Cricos</option>
                                    <option value="">Soportes de motor</option>
                                    <option value="">Distribución</option>
                                    <option value="">Soporte de caja</option>
                                    <option value="">Soporte de cardan</option>
                                    <option value="">Lubricación</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Marca:</label>
                            <div class="col-sm-12 col-md-10">
                                <select style="width:600px;height:40px" class="form-control" name="marca"> 
                                    <option value="">[Selecionar Marca]</option>
                                    <option value="Toyota">Toyota</option>
                                    <option value="Suzuki">Suzuki</option>
                                    <option value="Honda">Honda</option>
                                    <option value="Mazda">Mazda</option>
                                    <option value="">Chevrolet</option>
                                    <option value="">Kia</option>
                                    <option value="">BMW</option>
                                    <option value="">Nissan</option>
                                    <option value="">Mitsubishi</option>
                                    <option value="">Ford</option>
                                    <option value="">Mercedez-Benz</option>
                                    <option value="">Hyundai</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Modelo:</label>
                            <div class="col-sm-12 col-md-10">
                                <select style="width:600px;height:40px" class="form-control" name="modelo"> 
                                    <option value="">[Selecionar Modelo]</option>
                                    <option value="Corolla">Corolla</option>
                                    <option value="Yaris">Yaris</option>
                                    <option value="RAV4">RAV4</option>
                                    <option value="Land Cruiser Coronela">Land Cruiser Coronela</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Año:</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="number" name="anio" placeholder="Año" style="width:150px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="empresa" class="col-sm-12 col-md-2 col-form-label">Descripción:</label>
                            <div class="col-sm-12 col-md-2">
                                <!--wrap="hard"-->
                                <textarea rows="3" cols="75" name="descripcion"  placeholder="Escriba aqui...">
                                </textarea>
                            </div>
                        </div><br>
                        <hr width="75%" />
                        <div class="form-group" align="center">
                            <button title="Aceptar" type="submit" class="btn btn-success fa fa-check"></button>
                            <button title="Cancelar" type="button" class="btn btn-warning fa fa-times" style="color:#fff"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small>UES-FMP. DERECHOS RESERVADOS 2018</small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a class="btn btn-primary" href="../view/login.html">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="../assets/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="../assets/js/sb-admin.min.js"></script>
    </div>
</body>
</html>


    