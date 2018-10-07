
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="/phpSISAUTO/view/index.php">SISAUTO</a>
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
                <a class="nav-link" href="/phpSISAUTO/view/NuevaVenta.php">
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
                        <a href="/phpSISAUTO/view/Compras.php"><span class="fa fa-list"> Compras</span></a>
                    </li>
                    <li>
                        <a href="/phpSISAUTO/view/Ventas.php"> Ventas</a>
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
                        <a href="/phpSISAUTO/view/Cliente.php"><span class="fa fa-user"> Cliente</span></a>
                    </li>
                    <li>
                        <a href="/phpSISAUTO/view/Proveedor.php"><span class="fa fa-group"> Proveedor</span></a>
                    </li>
                    <li>
                        <a href="/phpSISAUTO/view/Producto.php"><span class="fa fa-tags"> Producto</span></a>
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
                        <a href="/phpSISAUTO/view/Inventario.php"><span class="fa fa-book"> Inventario Principal</span></a>
                    </li>
                    <li>
                        <a href="">seccion1</a>
                    </li>
                    <li>
                </ul>
            </li>
            <?php  if($_SESSION['usuarioActivo']['tipo_Usu']=='0'){?>
            <li class="nav-item" data-toggle="tooltip" data-placement="right">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-unlock-alt"></i>
                    <span class="nav-link-text">Seguridad</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a class="nav-link nav-link-collapse collapsed" href="#collapseMulti"><span class="fa fa-group">  Control Usuarios</span></a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti">
                            <li><a href="/phpSISAUTO/view/Usuarios.php">Usuarios Activos</a></li>
                            <li><a href="/phpSISAUTO/view/Usuarios.php">Usuarios Inactivos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/phpSISAUTO/view/Bitacora.php"><span class="fa fa-history"> Bitacora</span></a>
                    </li>
                    <li>
                        <a href="/phpSISAUTO/view/Back.php"><span class="fa fa-database"> Administrar Backup</span></a>
                    </li>
                </ul>
            </li>
          <?php  }?>
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
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Notificaciones
                        <span class="badge badge-pill badge-warning">6 Nuevas</span>
                    </span>
                    <span class="indicator text-warning d-none d-lg-block">
                        <i class="fa fa-fw fa-circle"></i>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Nuevas notificaciones:</h6>
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
            <?php include("../confi/Conexion.php");
            $conexion = conectarMysql();
            $sql1 = "SELECT * FROM usuario where idUsuario = 62";//Cambiar 62 por usuario que esta logueado
            
            $usuariosLogueado= mysqli_query($conexion, $sql1) or die("No se puedo ejecutar la consulta");
            $usuarioL = mysqli_fetch_assoc($usuariosLogueado) ;
            ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>&nbsp;<?php echo $usuarioL['nombre_Usu'] ?>
                    <span class="d-lg-none"><?php echo $usuarioL['nombre_Usu'] ?>
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" data-toggle="modal" data-target="#modalVerUsuario" onclick="mostrarUsu('<?php echo $usuarioL['nombre_Usu']?>','<?php echo $usuarioL['telefono_Usu']?>','<?php echo $usuarioL['correo_Usu']?>','<?php echo $usuarioL['direccion_Usu']?>','<?php echo $usuarioL['dui_Usu']?>','<?php echo $usuarioL['usuario_Usu']?>','<?php echo $usuarioL['tipo_Usu']?>');">
                        <span class="text-success">
                            <strong>Perfil</strong>
                        </span>
                        <div class="dropdown-message small"><i class="fa fa-at"></i> <?php echo $usuarioL['usuario_Usu'] ?></div>
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#modalEditarUsuarioContrasena" onclick="editarUsuContrasena('<?php echo $usuarioL['usuario_Usu']?>','<?php echo $usuarioL['tipo_Usu']?>','<?php echo $usuarioL['idUsuario']?>');" >
                        <span class="text-success">
                            <strong>Cambiar contraseña</strong>
                        </span>
                        <div class="dropdown-message small"></div>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>
            &nbsp;&nbsp;
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
            </li>
            &nbsp;&nbsp;
        </ul>
    </div>
</nav>

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
                    <div class="modal-body">
                        Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                        <a href="../Controlador/cerrar.php" class="btn btn-primary" href="http://localhost/phpSISAUTO/view/login.php">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </div>

<!-- MODAL EDITAR USUARIO -->

<div class="modal fade" id="modalEditarUsuarioContrasena" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#007bff;">
                <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Editar contraseña usuario</h5>
            </div>
            <div class="modal-body">
                <form action="../Controlador/usuarioC.php" method="POST" id="editarUsuContrasena" align="center" autocomplete="off">
                    <h5 align="center">Datos del usuario</h5>
                    <hr width="75%" style="background-color:#007bff;"/>
                    <input type="hidden" value="EditarUsuContrasena" name="bandera"/>
                    <input type="hidden" value="" name="idusuarioContrasena" id="idusuarioContrasena"/>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Usuario:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="nombreusuUsuContrasenaEditar" name="NombreUsu_Usu" style="width:400px;height:40px" readonly="readonly"aria-required="true" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Tipo de Usuario:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="tipoUsuContrasenaEditar" name="Tipo_Usu" style="width:400px;height:40px" readonly="readonly" aria-required="true" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Contraseña actual:</label>
                        <div class="col-sm-12 col-md-3">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaActualUsuEditar" name="Contrasena_UsuA" style="width:150px;height:40px" onkeypress="return validarContrasenaActual(this,event,this.value)">
                        </div><a id='mensajito2'></a>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Nueva contraseña:</label>
                        <div class="col-sm-12 col-md-3">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaUsuEditar" name="Contrasena_Usu" style="width:150px;height:40px" onkeypress="return validareditarContrasena(this,event,this.value)">
                        </div><a id='mensajito1'></a>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Vuelve a escribir la nueva contraseña:</label>
                        <div class="col-sm-12 col-md-3">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaUsu2Editar" name="Contrasena_Usu2" style="width:150px;height:40px" onkeyup="return validareditarContrasena2(this,event,this.value)"</a>
                        </div><a id='mensajito'></a>
                    </div>
                    <br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background-color:#007bff;"  onclick="validareditarUsuarioContrasena();">Aceptar</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
            </div>
        </div>
    </div>
    <form method="POST" id="cambio">
        <input type="hidden" name="id" id="id"  />
        <input type="hidden" name="bandera" id="bandera" />
        <input type="hidden" name="valor" id="valor" />
    </form>
</div>
