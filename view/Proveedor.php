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
                <li class="breadcrumb-item active">Proveedores</li>
            </ol>
            <div class="row">
                <div class="col-12">
                    <h1 align="center"></h1>
                    <a class="pull-right" href="">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Reporte
                            <span class="fa fa-file-pdf-o"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="/phpSISAUTO/view/AgregarPro.php">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                            Agregar nuevo 
                            <span class="fa fa-plus"></span>
                        </button>
                    </a>
                    <a class="pull-right" href="/phpSISAUTO/view/Proveedor.php?tipo=0">
                        <button class="btn btn-primary">
                            Ver proveedores inactivos
                        </button>
                    </a>
                    <br><br>
                    <!-- TABLA CLIENTES-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fa fa-table"></i> Proveedores</div>
                            <form align="right" ><br>
                            <table id="dataTable" class="pull-right " width="100%" cellspacing="0" >
                                <thead>
                                    <tr>
                                        <th style="width:200px"></th>
                                        <th style="width:120px"><div class="input-group" style="width:500px" align="center">
                                                <input type="text" class="form-control" id="entradafilter" placeholder="Buscar" name="" align="center">
                                                <div class="input-group-btn">
                                                    <button class="btn btn-default" type="submit" title="Buscar"><i class="fa fa-search" ></i></button>
                                                </div>
                                            </div></th>
                                    </tr>
                                </thead>
                            </table>
                        </form>
                        <div class="card-body">
                            <div class="table-responsive">
                            <?php if (!isset($_GET['tipo'])) { 
                                $tipo=1;
                                }else{
                                    $tipo = $_GET['tipo'];
                                    }?>
                            <?php 
                            $sql="SELECT * from proveedor where tipo_Prov='$tipo' order by nombre_Prov ASC";
                            $proveedores= mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta"); ?>
                                <!-- <input id="entradafilter" type="text" class="form-control"> -->
                                <table class="table table-striped table-bordered" id="example" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="width:150px">Empresa</th>
                                            <!-- <th style="width:85px">Correo</th> -->
                                            <th style="width:80px">Teléfono</th>
                                            <th style="width:175px">Responsable</th>
                                            <th align="center" style="width:2px">Acción</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="contenidobusqueda" >
                                        <?php While($proveedore=mysqli_fetch_assoc($proveedores)){?>
                                        <tr>
                                            <td><?php echo $proveedore['nombre_Prov'] ?></td>

                                            <td><?php echo $proveedore['telefono_Prov'] ?></td>
                                            <td><?php echo $proveedore['nombreResp_Prov'] ?></td>
                                                                                       
                                            <th align="center">
                                                <button title="Ver"type="button" class="btn btn-info fa fa-eye" data-toggle="modal" data-target="#modalVerProveedor" href="" onclick="mostrarPro('<?php echo $proveedore['nombre_Prov']?>','<?php echo $proveedore['correo_Prov']?>','<?php echo $proveedore['telefono_Prov']?>','<?php echo $proveedore['direccion_Prov']?>','<?php echo $proveedore['nombreResp_Prov']?>','<?php echo $proveedore['telefonoResp_Prov']?>','<?php echo $proveedore['descripcion_Prov']?>');"></button>
                                                <button title="Editar" type="button" class="btn btn-primary fa fa-pencil-square-o" data-toggle="modal" data-target="#modalEditarProveedor" onclick="editarPro('<?php echo $proveedore['nombre_Prov']?>','<?php echo $proveedore['correo_Prov']?>','<?php echo $proveedore['telefono_Prov']?>','<?php echo $proveedore['direccion_Prov']?>','<?php echo $proveedore['nombreResp_Prov']?>','<?php echo $proveedore['telefonoResp_Prov']?>','<?php echo $proveedore['idProveedor']?>','<?php echo $proveedore['descripcion_Prov']?>');"></button>
                                                <?php  if ($tipo == 1) {
                                                ?>
                                                <button title="Dar de baja" type="button" class="btn btn-danger fa fa-arrow-circle-down" onclick="baja(<?php echo $proveedore['idProveedor'] ?>)"></button>
                                                <?php  }else{ ?>
                                                <button title="Dar de alta" type="button" class="btn btn-success fa fa-arrow-circle-up" onclick="alta(<?php echo $proveedore['idProveedor'] ?>)"></button>
                                                <?php } ?>
                                            </th>
                                        </tr>
                                        <?php } ?>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Ultima actualización </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- MODAL VER PROVEEDOR -->

<div class="modal fade" id="modalVerProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#007bff;">

                    <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Proveedor</h5>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/proveedorC.php" method="POST" id="guardarPro" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <input type="hidden" value="GuardarPro" name="bandera"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre de la Empresa:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombrePro" name="Nombre_Prov" style="width:400px;height:40px" readonly="readonly" aria-required="true" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="tel3" class="col-sm-12 col-md-3 col-form-label">Correo:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="email" id="correoPro" data-inputmask="'mask' : '9999-9999'" name="Correo_Pro" style="width:400px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoPro" name="Correo_Usu" style="width:150px;height:40px" value="" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="Direccion_Pro" style="width:400px;height:40px" id="direccionPro" disabled="true">
                            </div>
                        </div>
                        <h5 align="center">Datos del Proveedor</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre Responsable:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombreRes" name="NombreUsu_Usu" style="width:400px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label> 
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoRes" name="DUI_Usu" style="width:150px;height:40px" disabled="true">
                            </div>
                        </div>
                        <div id="ocultar">
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Descripción:</label> 
                            <div class="col-sm-12 col-md-8">
                               <textarea class="form-control" type="text" name="descripcion"  placeholder="Escriba aqui..." id="descripcionProv" style="width:400px;height:80px" disabled="true">
                               </textarea>
                            </div>
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

      <!-- MODAL EDITAR PROVEEDOR -->
<div class="modal fade" id="modalEditarProveedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#007bff;">

                    <h5 class="modal-title" id="myModalLabel"> <i class="fa fa-user"></i> Proveedor</h5>
                </div>
                <div class="modal-body">
                    <form action="../Controlador/proveedorC.php" method="POST" id="editarPro" align="center" autocomplete="off">
                        <h5 align="center">Datos Generales</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <input type="hidden" value="EditarPro" name="bandera"></input>
                        <input type="hidden" value="" name="idproveedor" id="idproveedor"></input>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre de la Empresa:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombreProEditar" name="Nombre_Emp" style="width:400px;height:40px" aria-required="true" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label  for="correo" class="col-sm-12 col-md-3 col-form-label">Correo:</label>
                            <div  class="col-sm-12 col-md-8">
                                <input class="form-control" type="email" id="correoProEditar"  name="Correo_Emp" style="width:400px;height:40px" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoProEditar" data-mask="9999-9999" name="Telefono_Emp" style="width:150px;height:40px" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="direccion" class="col-sm-12 col-md-3 col-form-label">Dirección:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" name="Direccion_Emp" style="width:400px;height:40px" id="direccionProEditar" >
                            </div>
                        </div>
                        <h5 align="center">Datos del Proveedor</h5>
                        <hr width="75%" style="background-color:#007bff;"/>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="nombre" class="col-sm-12 col-md-3 col-form-label">Nombre Responsable:</label>
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="nombreResEditar" name="Nombre_Res" style="width:400px;height:40px">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Teléfono:</label> 
                            <div class="col-sm-12 col-md-8">
                                <input class="form-control" type="text" id="telefonoResEditar" data-mask="9999-9999" name="Telefono_Res" style="width:150px;height:40px" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 col-md-1">
                            </div>
                            <label for="usuario" class="col-sm-12 col-md-3 col-form-label">Descripción:</label> 
                            <div class="col-sm-12 col-md-8">
                               <textarea class="form-control" type="text" name="descripcion"  placeholder="Escriba aqui..." id="descripcionProvEditar" style="width:400px;height:80px">
                               </textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                           <input type="hidden" id="anterior" value=""  />
                          <button type="button" class="btn btn-default" style="background-color:#007bff;" onclick="validarproveedorEditar()">Aceptar</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color:#007bff;">Cerrar</button>
                        </div>
                    </form>
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

        <script src="../assets/Validaciones/mostrarProveedor.js"></script> 

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

        <script type="text/javascript">
            function baja(id){
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
                if(result.value){
                $('#id').val(id);
                $('#bandera').val('cambio');
                $('#valor').val('0');
                var dominio = window.location.host;
                 $('#cambio').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/proveedorC.php');
                 $('#cambio').submit();
                 }else{

                }
            })
            }

            function alta(id){
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
                if(result.value){
                $('#id').val(id);
                $('#bandera').val('cambio');
                $('#valor').val('1');
                var dominio = window.location.host;
                 $('#cambio').attr('action','http://'+dominio+'/phpSISAUTO/Controlador/proveedorC.php');
                 $('#cambio').submit();
                 }else{

                 }
            })
            }
        </script>
</body>
</html>
