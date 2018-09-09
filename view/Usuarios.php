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
                    <a href="index.php">Inicio</a>
                </li>
                <li class="breadcrumb-item active">Control Usuarios</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="/phpSISAUTO/view/AgregarUsu.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo
                            <span class="fa fa-plus"></span>
                        </button>
                    </a>
                    <br><br>
                    <!-- TABLA CLIENTES-->
                    <div class="card mb-3">
                        <div class="card-header" style="background-color:#eff3f4;">
                            <i class="fa fa-users"></i> Usuarios</div>
                            <form align="right" ><br>
                            <table class="pull-right " id="dataTable" width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" placeholder="Buscar" name="" align="center">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit" title="Buscar"><i class="fa fa-search" ></i></button>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </form>

                        <div class="card-body">
                            <div class="table-responsive">
                            <?php include("../confi/Conexion.php"); 
                            $conexion = conectarMysql();
                            $sql="SELECT * from usuario order by nombre_Usu ASC";
                            $usuarios= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
                                <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width:175px">Nombre</th>
                                            <th style="width:85px">Correo</th>
                                            <th style="width:85px">Teléfono</th>
                                            <th align="center" style="width:2px">Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="contenidobusqueda">
                                    <?php While($usuario=mysqli_fetch_assoc($usuarios)){?>
                                        <tr>
                                            <td><?php echo $usuario['nombre_Usu'] ?></td>
                                            <td><?php echo $usuario['correo_Usu'] ?></td>
                                            <td><?php echo $usuario['telefono_Usu'] ?></td>  
                                            <th align="center">
                                                <button title="Ver"type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerUsuario" href=""></button>
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o"></button>
                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down"></button>
                                            </th>
                                        </tr>
                                        <?php } ?>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                        <div class="card-footer small text-muted"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL VER USUARIOS -->

    <div class="modal fade" id="modalVerUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#007bff;">

                    <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Usuario</h5>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/usuarioC.php" method="POST" id="guardarUsu" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <input type="hidden" value="GuardarUsu" name="bandera"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" placeholder="Nombre Completo" type="text" id="nombreUsu" name="Nombre_Usu" style="width:400px;height:40px" disabled="true" aria-required="true" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="tel3" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoUsu" placeholder="9999-9999" data-inputmask="'mask' : '9999-9999'" name="Telefono_Usu" style="width:150px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Correo:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" placeholder="Correo" type="email" id="correoUsu" name="Correo_Usu" style="width:400px;height:40px" value="" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="Dirección" name="Direccion_Usu" style="width:400px;height:40px" id="direccionUsu" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label class="col-sm-12 col-md-3 col-form-label">DUI:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="99999999-9" id="duiUsu" name="DUI_Usu" style="width:150px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Usuario:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="Nombre de Usuario" id="nombreusuUsu" name="NombreUsu_Usu" style="width:400px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Tipo de Usuario:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" placeholder="Tipo de Usuario" id="tipoUsu" name="Tipo_Usu" style="width:400px;height:40px" disabled="true" aria-required="true" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php include("Generalidadespantalla/cierre.php"); ?>
</div>
        
<!-- Filtrado de la tabla -->
<script type="text/javascript">
    $(document).ready(function () {
       $('#entradafilter').keyup(function () {
          var rex = new RegExp($(this).val(), 'i');
          $('.contenidobusqueda tr').hide();
          $('.contenidobusqueda tr').filter(function () {
            return rex.test($(this).text());
        }).show();
      })

   });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
</body>
</html>
