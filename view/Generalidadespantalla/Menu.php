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
                <li class="nav-item" data-toggle="tooltip" data-placement="right">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                        <i class="fa fa-unlock-alt"></i>
                        <span class="nav-link-text">Seguridad</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseMulti">
                        <li>
                            <a href="/phpSISAUTO/view/Usuarios.php">Control Usuarios</a>
                        </li>
                        <li>
                            <a href="/phpSISAUTO/view/Bitacora.php">Bitacora</a>
                        </li>
                        <li>
                            <a href="/phpSISAUTO/view/Back.php">Administrar Backup</a>
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
                        <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>