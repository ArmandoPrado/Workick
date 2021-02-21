<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="assets/Logos/LogoIcono.png" />
    <title> Workick | Principal </title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <!-- Gritter -->
    <link href="assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/plugins/footable/footable.core.css" rel="stylesheet">
    <link href="assets/css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">
    <link href="assets/css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">
    <link href="assets/css/plugins/datapicker/datepicker3.css" rel="stylesheet">

    <script src="assets/js/fn/Principal.js"></script>

    <script src="assets/js/fn/notificacion.js"></script>

    <script type="text/javascript">
        /*  var usuario = sessionStorage.getItem('usuarioLogin');
        if (usuario == null || usuario == undefined || usuario == "") {
            window.location = "../../login.html";
        }
*/

    </script>
</head>

<body>
    <div id="wrapper">
        <?php include "includes/menuLeft.php"; ?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <?php include "includes/header.php"; ?>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <h2>Filtros</h2>
                <div class="col-sm-12">

                    <div class="col-sm-4">

                        <div class="navbar-header">
                            <!--<a class="navbar-minimalize minimalize-styl-2 btn btn-primary "><i class="fa fa-bars"></i> </a>-->
                            <form role="search" class="navbar-form-custom" action="search_results.html">
                                <div class="form-group">
                                    <input type="text" placeholder="Buscar..." class="form-control" name="top-search" id="top-search">
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-sm-3">
                        <label for="">Categoria</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
                            <select class="form-control" name="cmbCategoria" id="cmbCategoria">
                                <option value="0">-</option>
                                <option value="1">Fontaneria</option>
                                <option value="3">Construcion</option>
                                <option value="4">Mecanica</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <label for="">Municipio</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <select class="form-control" name="cmbMuni" id="cmbMuni">
                                <option value="Todos">Todos</option>
                                <option value="Guadalajara">Guadalajara</option>
                                <option value="Zapopan">Zapopan</option>
                                <option value="Tlajomulco">Tlajomulco</option>
                                <option value="Tlaquepaque">Tlaquepaque</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <button id="btnBuscarP" type="button" title="Buscar" class="btn btn-circle btn-sm btn-primary btn-outline" data-loading-text="Cargando..." onclick=""><i class="fa fa-search"></i></button>
                    </div>

                </div>

            </div>
            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="row">
                    <div class="col-md-9">
                        <div class="ibox-title">
                            <h5>Recomendaciones</h5>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div id="PanelRecomendaciones" class="col-md-9">

                        <!--<div class="ibox">
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="table shoping-cart-table">

                                        <tbody>
                                            <tr>
                                                <td width="90">
                                                    <div class="cart-product-imitation">
                                                    </div>
                                                </td>
                                                <td class="desc">
                                                    <h3>
                                                        <a href="#" class="text-navy">
                                                            Albañil
                                                        </a>
                                                    </h3>
                                                    <p class="small">
                                                        It is a long established fact that a reader will be distracted by the readable
                                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                                    </p>
                                                    <dl class="small m-b-none">
                                                        <dt>Serna </dt>
                                                        <dd>Datos Personales</dd>
                                                    </dl>

                                                    <div class="m-t-sm">
                                                        <a href="#" class="text-muted"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a>
                                                        |
                                                        <a href="#" class="text-muted"><i class="fa fa-usd"></i><i class="fa fa-usd"></i><i class="fa fa-usd"></i></a>
                                                    </div>
                                                </td>
                                                <td>
                                                </td>
                                                <td width="65">

                                                </td>
                                                <td>
                                                    <h4>
                                                    </h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <div class="ibox-content">
                                <button class="btn btn-primary float-right"><i class="fa fa-volume-control-phone"></i> Contactar</button>
                            </div>
                        </div>-->

                    </div> <!-- termina -->
                    <div id="PanelOportunidades" class="col-md-3">

                        <div class="ibox">
                            <div class="ibox-title">
                                <h5>Dales una Oportunidad</h5>
                            </div>
                            <div class="ibox-content">
                                <span>
                                    Programador
                                </span>
                                <h2 class="font-bold">
                                    Eduardo
                                </h2>

                                <hr />
                                <span class="text-muted small">
                                    Gran experiencia en sql.
                                </span>
                                <div class="m-t-sm">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mdlPropuesta"><i class="fa fa-volume-control-phone"></i> Contactar</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
            <?php include "includes/footer.php"; ?>
        </div>


    </div>

    <!--Modal-->

    <form id="frmPerfiles">
        <div class="modal inmodal fade in" id="mdlPropuesta" tabindex="-1" role="dialog">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Propuesta</h4>
                    </div>

                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm-3">
                                <label>Estatus</label>
                                <div class="input-group m-b">
                                    <span class="input-group-addon">
                                        <i class="fa fa-star"></i>
                                    </span>

                                    <select data-placeholder="Selecciona..." class="chosen-select" id="txtEstIDPer" tabindex="2">
                                        <option value="1">Alta</option>
                                        <option value="0">Baja</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-sm-2">
                                <label>Perfil</label>
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input class="form-control" name="txtAntPer" id="txtAntPer" type="text" placeholder="Perfil">
                                </div>
                            </div>
                            <div class="form-group col-sm-7">
                                <label>Nombre</label>
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <input class="form-control" name="txtNomPer" id="txtNomPer" type="text" placeholder="Nombre">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12">
                                <label>Notas</label>
                                <div class="input-group m-b">
                                    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                    <textarea class="form-control" name="txtNotPer" id="txtNotPer" type="text" placeholder="Notas adicionales"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer tooltip-demo">
                        <button type="button" id="btnHacerPropuesta"  data-toggle="tooltip" data-placement="top" title="Hacer propuesta" class="btn btn-rounded btn-sm btn-primary btn-outline"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                        <button type="button" id="btnRegPers" data-toggle="tooltip" data-placement="top" title="Regresar" class="btn btn-rounded btn-sm btn-primary btn-outline" data-dismiss="modal"><i class="fa fa-chevron-left"></i></button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>



    <script src="assets/js/jquery-3.1.1.min.js"></script>
    <!-- jQuery UI -->
    <script src="assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <!-- Flot -->
    <script src="assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <!-- Peity -->
    <script src="assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets/js/demo/peity-demo.js"></script>
    <!-- Custom and plugin javascript -->
    <script src="assets/js/inspinia.js"></script>
    <script src="assets/js/plugins/pace/pace.min.js"></script>
    <!-- GITTER -->
    <script src="assets/js/plugins/gritter/jquery.gritter.min.js"></script>
    <!-- Sparkline -->
    <script src="assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- Sparkline demo data  -->
    <script src="assets/js/demo/sparkline-demo.js"></script>
    <!-- ChartJS-->
    <script src="assets/js/plugins/chartJs/Chart.min.js"></script>
    <!-- Toastr -->
    <script src="assets/js/plugins/toastr/toastr.min.js"></script>
    <script src="assets/js/plugins/footable/footable.all.min.js"></script>
    <script src="assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="assets/js/plugins/fullcalendar/moment.min.js"></script>
    <script src="assets/js/plugins/dataTables/datatables.min.js"></script>
    <!-- Chosen -->
    <script src="assets/js/plugins/chosen/chosen.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //tipos de notificaciones
            //notificacion('warning', 'Prueba', 'No se encontro nada', 'toast-top-right');
            notificacion('success', 'Bienvenido', 'Gracias por visitarnos', 'toast-top-right');
            //notificacion('error', 'Prueba', 'Busqueda realizada', 'toast-top-right');
            $('#side-menu').metisMenu();
            verRecomendaciones();
        });

        function refreshpage() {

            //  window.location.reload();
        }

    </script>
</body>

</html>
