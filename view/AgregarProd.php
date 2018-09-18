<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include("Generalidadespantalla/apertura.php"); ?>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

        <?php
        include("Generalidadespantalla/Menu.php");

        include("../confi/Conexion.php");
        $conexion = conectarMysql();
        $sql = "SELECT * from producto order by idProducto ASC";
        $producto = mysqli_query($conexion, $sql) or die("No se puedo ejecutar la consulta");
        $contador = mysqli_num_rows($producto);
        if ($contador > -1 && $contador < 9) {
            $ceros = "0000";
        } else if ($contador >= 9 && $contador < 100) {
            $ceros = "000";
        } else if ($contador >= 99 && $contador < 1000) {
            $ceros = "00";
        } else if ($contador >= 999 && $contador < 10000) {
            $ceros = "0";
        } else {
            $ceros = "";
        }
        ?>

        <div class="content-wrapper" style="background-color:#eff3f4;">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Inicio</a>

                    <li class="breadcrumb-item active">
                        <a href="/phpSISAUTO/view/Producto.php">Productos</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>Registrar Producto</a>
                    </li>
                </ol>
                <div class="card mb-3">
                    <div class="card-header">
                        <i class=""></i> Registrar Producto</div>
                    <div class="card-body">
                        <form action="../Controlador/productoC.php" method="POST" align="center" id="guardarProd" autocomplete="off">
                            <input type="hidden" value="guardar" name="bandera"></input>
                            <div class="form-group row">
                                <label for="nombreP" class="col-sm-12 col-md-2 col-form-label">Codigo:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input name="codigoPro" value="<?php echo $ceros . ($contador + 1) ?>" class="form-control" placeholder="" type="text" id="codigoP" style="width:600px;height:40px" readonly="readonly">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombreP" class="col-sm-12 col-md-2 col-form-label">Nombre:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input name="nombrePro" class="form-control" placeholder="Nombre del Producto" type="text" id="nombrePr" style="width:600px;height:40px">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="categoriaP" class="col-sm-12 col-md-2 col-form-label">Categoria:</label>
                                <div class="col-sm-12 col-md-10">
                                    <select name="categorias" style="width:600px;height:40px" class="form-control" id="categoriaPr" onchange="veruniversal();">
                                        <option value="">[Selecionar Categoria]</option>
                                        <option value="1">AMORTIGUADORES</option>
                                        <option value="2">BUJÍAS</option>
                                        <option value="3">ELÉCTRICO</option>
                                        <option value="4">ENFRIAMIENTO</option>
                                        <option value="5">FILTROS</option>
                                        <option value="6">FRENOS</option>
                                        <option value="7">MOTOR</option>
                                        <option value="8">SENSORES</option>
                                        <option value="9">SUSPENSIÓN Y DIRECCIÓN</option>
                                        <option value="10">TRANSMISIÓN Y EMBRAGUE</option>
                                        <option value="11">UNIVERSALES</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="marcaP" class="col-sm-12 col-md-2 col-form-label">Marca:</label>
                                <div class="col-sm-12 col-md-10">
<!--                                    <select style="width:600px;height:40px" class="form-control" name="marca" id="marcaPr">
                                        <option value="" selected>[Selecionar Marca]</option>
                                        <option value="HELIAR">HELIAR</option>
                                        <option value="BRM">BRM</option>
                                        <option value="CRAL">CRAL</option>
                                        <option value="ELECTRAN">ELECTRAN</option>
                                        <option value="ACEDELCO">ACEDELCO</option>
                                        <option value="KYB">KYB</option>
                                        <option value="CORVEN">amortiguador-CORVEN</option>
                                        <option value="BOGE">BOGE</option>
                                        <option value="SANCH">SANCH</option>
                                        <option value="VALVOLINE">VALVOLINE</option>
                                        <option value="JURID">JURID</option>
                                        <option value="BEHR">BEHR</option>
                                    </select>-->
                                    <input style="width:600px;height:40px" class="form-control" name="marca" id="marcaPr" placeholder="Marca del Producto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="modeloP" class="col-sm-12 col-md-2 col-form-label">Modelo:</label>
                                <div class="col-sm-12 col-md-10">
<!--                                    <select style="width:600px;height:40px" class="form-control" name="modelo" id="modeloPr">
                                        <option value="">[Selecionar Modelo]</option>
                                        <option value="Toyota-Corolla">Corolla</option>
                                        <option value="Toyota-Yaris">Yaris</option>
                                        <option value="Toyota-RAV4">RAV4</option>
                                        <option value="Land Cruiser Coronella">Land Cruiser Coronella</option>
                                        <option value="Mazda-Tribute">Mazda-Tribute</option>
                                        <option value="Nissan-Murano">Nissan-Murano</option>
                                        <option value="Nissan-Rogue">Nissan-Rogue</option>
                                        <option value="Honda-CRV">Honda-CRV</option>
                                        <option value="Toyoya-Hilux">Toyoya-Hilux</option>
                                        <option value="Mitsubishi-L200">Mitsubishi-L200</option>
                                        <option value="Suzuki-Vitara">Suzuki-Vitara</option>
                                        <option value="BMW-Z4">BMW-Z4</option>
                                    </select>-->
                                    <input style="width:600px;height:40px" class="form-control" name="modelo" id="modeloPr" placeholder="Modelo de Auto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="anioP" class="col-sm-12 col-md-2 col-form-label">Año:</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="number" id="anioPr" name="anio" placeholder="Año" style="width:150px;height:40px">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="descripcionP" class="col-sm-12 col-md-2 col-form-label">Descripción:</label>
                                <div class="col-sm-12 col-md-2">
                                    <!--wrap="hard"-->
                                    <textarea rows="3" cols="75" name="descripcion"  placeholder="Escriba aqui..." id="descripcionPr">
                                    </textarea>
                                </div>
                            </div><br>
                            <hr width="75%" />
                            <div class="form-group" align="center">
                                <button title="Aceptar" type="button" class="btn btn-success " onclick="validarProducto();">Aceptar</button>
                                <button title="Cancelar" type="reset" class="btn btn-warning " style="color:#fff">Cancelar</button>
                                <input type="hidden" id="universal"value="0">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                        
            <script type="text/javascript">
                                function veruniversal() {
                                    if ($('#categoriaPr').find('option:selected').text() == "UNIVERSALES") {
                                        $('#universal').val(1);
//                                        $("#marcaPr").attr("disabled", "disabled");
                                        $("#modeloPr").attr("disabled", "disabled");
                                        $("#anioPr").attr("disabled", "disabled");
                                    } else {
                                        $('#universal').val(0);
//                                        $("#marcaPr").removeAttr("disabled");
                                        $("#modeloPr").removeAttr("disabled");
                                        $("#anioPr").removeAttr("disabled");
                                    }
                                }
            </script>
        </div>
        <?php include("Generalidadespantalla/cierre.php"); ?>
        <script src="../assets/Validaciones/validarProducto.js"></script>
    </body>
</html>