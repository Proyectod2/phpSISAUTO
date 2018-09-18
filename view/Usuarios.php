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
                    <!-- TABLA USUARIOS-->
                    <div class="card mb-3">
                        <div class="card-header" style="background-color:#eff3f4;">
                            <i class="fa fa-users"></i> Usuarios</div>
                            <form align="right"><br>
                            <table id="dataTable" class="pull-right " width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" id="entradafilter" placeholder="Buscar" name="" align="center">
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
                                <?php if (!isset($_GET['tipo'])) { 
                                 $tipo = 1;
                             }else{
                                $tipo = $_GET['tipo'];
                            }?>
                            <?php include("../confi/Conexion.php");
                            $conexion = conectarMysql();
                            $sql="SELECT * from usuario where estado_Usu = '$tipo' order by nombre_Usu ASC";
                            $usuarios= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
                                <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0"  style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="width:175px">Nombre</th>
                                            <th style="width:85px">Correo</th>
                                            <th style="width:85px">Teléfono</th>
                                            <th align="center" style="width:2px">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="contenidobusqueda">
                                    <?php While($usuario = mysqli_fetch_assoc($usuarios)){?>
                                        <tr>
                                            <td><?php echo $usuario['nombre_Usu'] ?></td>
                                            <td><?php echo $usuario['correo_Usu'] ?></td>
                                            <td><?php echo $usuario['telefono_Usu'] ?></td>  
                                            <th align="center">
                                                <button title="Ver"type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerUsuario" href="" onclick="mostrarUsu('<?php echo $usuario['nombre_Usu']?>','<?php echo $usuario['telefono_Usu']?>','<?php echo $usuario['correo_Usu']?>','<?php echo $usuario['direccion_Usu']?>','<?php echo $usuario['dui_Usu']?>','<?php echo $usuario['usuario_Usu']?>','<?php echo $usuario['tipo_Usu']?>');"></button>
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o" data-toggle="modal" data-target="#modalEditarUsuario" onclick="editarUsu('<?php echo $usuario['nombre_Usu']?>','<?php echo $usuario['telefono_Usu']?>','<?php echo $usuario['correo_Usu']?>','<?php echo $usuario['direccion_Usu']?>','<?php echo $usuario['dui_Usu']?>','<?php echo $usuario['usuario_Usu']?>','<?php echo $usuario['tipo_Usu']?>','<?php echo $usuario['idUsuario']?>');"></button>
                                                <?php  if ($tipo == 1) {
                                                ?>
                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down" onclick="bajaUsu(<?php echo $usuario['idUsuario'] ?>)"></button>
                                                <?php  }else{ ?>
                                                <button title="Dar de alta" type="button" class="btn btn-success fa fa-arrow-circle-up" onclick="altaUsu(<?php echo $usuario['idUsuario'] ?>)"></button>
                                                <?php } ?>
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
                                <input class="form-control" placeholder="Nombre Completo" type="text" id="nombreUsu" name="Nombre_Usu" style="width:400px;height:40px" readonly="readonly" aria-required="true" value="">
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

<!-- MODAL EDITAR USUARIOS -->

<div class="modal fade" id="modalEditarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#007bff;">
                <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Editar usuario</h5>
            </div>
            <div class="modal-body">
                <form action="../Controlador/usuarioC.php" method="POST" id="editarUsu" align="center" autocomplete="off">
                    <h5 align="center">Datos generales</h5>
                    <hr width="75%" style="background-color:#007bff;"/>
                    <input type="hidden" value="EditarUsu" name="bandera"></input>
                    <input type="hidden" value="" name="idusuario" id="idusuario"></input>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="nombreUsuEditar" name="Nombre_Usu" style="width:400px;height:40px" aria-required="true" value=""  onkeypress="return validarNombreCompletoUsuario(this,event,this.value)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label  for="tel3" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                        <div  class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="telefonoUsuEditar" data-mask="9999-9999" name="Telefono_Usu" style="width:150px;height:40px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Correo:</label>
                        <div class="col-sm-12 col-md-3">
                            <input class="form-control" type="email" id="email" name="Correo_Usu" style="width:400px;height:40px" value="" onkeyup="validarCorreoEditar(this)"><a id='mensajitoCorreo'></a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="direccion" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" name="Direccion_Usu" style="width:400px;height:40px" id="direccionUsuEditar">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label class="col-sm-12 col-md-3 col-form-label">DUI:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" data-mask="99999999-9" id="duiUsuEditar" name="DUI_Usu" style="width:150px;height:40px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Usuario:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="nombreusuUsuEditar" name="NombreUsu_Usu" style="width:400px;height:40px" readonly="readonly"aria-required="true" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Tipo de Usuario:</label>
                        <div class="col-sm-12 col-md-8">
                            <input class="form-control" type="text" id="tipoUsuEditar" name="Tipo_Usu" style="width:400px;height:40px" readonly="readonly" aria-required="true" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Contraseña actual:</label>
                        <div class="col-sm-12 col-md-2">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaActualUsuEditar" name="Contrasena_Usu" style="width:150px;height:40px" onkeypress="return validarContrasenaActual(this,event,this.value)">
                        </div><a id='mensajito2'></a>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Nueva contraseña:</label>
                        <div class="col-sm-12 col-md-2">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaUsuEditar" name="Contrasena_Usu" style="width:150px;height:40px" onkeypress="return validareditarContrasena(this,event,this.value)">
                        </div><a id='mensajito1'></a>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-md-1">
                        </div>
                        <label for="contrasena" class="col-sm-12 col-md-3 col-form-label">Vuelve a escribir la nueva contraseña:</label>
                        <div class="col-sm-12 col-md-2">
                            <input class="form-control" type="password" placeholder="******" id="contrasenaUsu2Editar" name="Contrasena_Usu2" style="width:150px;height:40px" onkeyup="return validareditarContrasena2(this,event,this.value)"</a>
                        </div><a id='mensajito'></a>
                    </div><br>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default" style="background-color:#007bff;"  onclick="validareditarUsuario();">Aceptar</button>
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
    <?php include("Generalidadespantalla/cierre.php"); ?>
</div>
<script src="../assets/Validaciones/mostrarUsuario.js"></script>     
<script src="../assets/Validaciones/validarUsuario.js"></script>
<script src="../assets/Validaciones/validarDUI.js"></script>
<script src="../assets/Validaciones/validarTelefono.js"></script>
<script src="../assets/Validaciones/validarContrasena.js"></script>
<script src="../assets/Validaciones/validarNombreUsuario.js"></script>
<script src="../assets/Validaciones/validarNombreCompletoUsuario.js"></script>
<script src="../assets/Validaciones/validarCorreo.js"></script>


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
<!-- Dar de Baja Dar de Alta -->
<script type="text/javascript">
    function bajaUsu(id){
        swal({
            title: '¿Está seguro en dar de baja?',
          // text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si',
            cancelButtonText: 'No',
        }).then((result) => {
            $('#id').val(id);
            $('#bandera').val('cambio');
            $('#valor').val('0');
            var dominio = window.location.host;
            $('#cambio').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/usuarioC.php');
            $('#cambio').submit();
        })
    }

    function altaUsu(id){
        swal({
            title: '¿Está seguro en dar de alta?',
          // text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si',
          cancelButtonText: 'No',

      }).then((result) => {
        $('#id').val(id);
        $('#bandera').val('cambio');
        $('#valor').val('1');
        var dominio = window.location.host;
         $('#cambio').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/usuarioC.php');
         $('#cambio').submit();
    })
    }
</script>
</body>
</html>
