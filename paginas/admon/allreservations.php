<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>MeatKing</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/main.css">

    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Meat King</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="#header">
                <img src="../../img/polenta.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="">Reservaciones</a></li>
                <li><a href="">Inventario</a></li>             
                <li><a href="">Pagos</a></li>
                <li><a href="">Usuarios</a></li>
                <li><a href="">Cancelaciones</a></li> 
                <li><a href="">Cerrar sesión</a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->


 <div style="padding-top:70px; padding-bottom:100px;">

<div class="container">
    <div class="row">
        <div id="ctl08_ctl06_stMain_ctl28_pnlForms">

            <div id="ctl08_ctl06_stMain_ctl28_pnlFilter" style="background-color: #F4F2F2; border-top: solid 1px #B1B1B1">


                <div id="ctl08_ctl06_stMain_ctl28_divFilter" class="form-horizontal well">
                    <div class="form-group">
                        <label for="ctl08_ctl06_stMain_ctl28_ddlCategoryBootstrap" class="control-label col-sm-2">Ver Categoría</label>
                        <div class="col-sm-10">
                            <select name="ctl08$ctl06$stMain$ctl28$ddlCategoryBootstrap" onchange="javascript:setTimeout('__doPostBack(\'ctl08$ctl06$stMain$ctl28$ddlCategoryBootstrap\',\'\')', 0)"
                                id="ctl08_ctl06_stMain_ctl28_ddlCategoryBootstrap" class="select form-control">
                        <option selected="selected" value="-1">Todo</option>
                        <option value="10351">Test Cat</option>
                        <option value="10352">Category 1</option>

                    </select>
                        </div>
                    </div>
                </div>

            </div>

            <div class="grid-results">
                <div class="table-responsive">
                    <table class="table table-striped kfsdatagrid" cellspacing="0" cellpadding="3" border="0" id="ctl08_ctl06_stMain_ctl28_dgForms"
                        style="border-collapse:collapse;">
                        <tbody>
                            <tr class="listHeader nodrop" valign="bottom">
                                <td class="listHeader"><a href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl04$ctl00','')">#</a></td>
                                <td
                                    class="listHeader"><a href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl04$ctl01','')">Nombre</a></td>
                                    <td class="listHeader" align="right">Salon</td>
                                    <td class="listHeader" align="right">Dia</td>
                                    <td class="listHeader" align="right">Hora</td>
                                        <td class="listHeader" align="right">Status</td>
                                        <td class="listHeader" align="right">Reporte</td>
                                        <td class="listHeader"> </td>


                            </tr>
                            <tr class="listItem" valign="top" onmouseover="this.style.backgroundColor='#E8E5E5';" onmouseout="this.style.backgroundColor='#F4F2F2';"
                                id="ctl08_ctl06_stMain_ctl28_dgForms_row_2" style="background-color: rgb(244, 242, 242);">
                                <td>1</td>
                                <td valign="top">Pedro González González</td>
                                <td>Mediano</td>
                                <td>28/10/2018</td>
                                <td>17:00</td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl00','')"><i class="fa fa-clock-o"></i></a></td>
                                <td
                                    class="smallText" align="right" style="white-space:nowrap;"><a onclick="window.open('ReportPDFViewer.aspx?Report=/ccbcfw/Arena/Forms/Form Printer&Person=1&FormInstance=2', 'contribPopUp13915','width=800,height=800,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=50,top=50');return false;"
                                        class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl01','')"><i class="fa fa-list"></i></a></td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a onclick="return confirmDGDelete(this, 'Are you sure you want to delete this form instance?', '#F4F2F2', '#FFFFFF', '#fefebb');"
                                            title="Delete this form instance" class="btn btn-danger" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl04','')"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            
                            <tr class="listItem" valign="top" onmouseover="this.style.backgroundColor='#E8E5E5';" onmouseout="this.style.backgroundColor='#F4F2F2';"
                                id="ctl08_ctl06_stMain_ctl28_dgForms_row_2" style="background-color: rgb(244, 242, 242);">
                                <td>2</td>
                                <td valign="top">Alexis Rodrigo Ortiz Puebla</td>
                                <td>Grande</td>
                                <td>28/10/2018</td>
                                <td>17:00</td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl00','')"><i class="fa fa-check-square-o"></i></a></td>
                                <td
                                    class="smallText" align="right" style="white-space:nowrap;"><a onclick="window.open('ReportPDFViewer.aspx?Report=/ccbcfw/Arena/Forms/Form Printer&Person=1&FormInstance=2', 'contribPopUp13915','width=800,height=800,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=50,top=50');return false;"
                                        class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl01','')"><i class="fa fa-list"></i></a></td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a onclick="return confirmDGDelete(this, 'Are you sure you want to delete this form instance?', '#F4F2F2', '#FFFFFF', '#fefebb');"
                                            title="Delete this form instance" class="btn btn-danger" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl04','')"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="listItem" valign="top" onmouseover="this.style.backgroundColor='#E8E5E5';" onmouseout="this.style.backgroundColor='#F4F2F2';"
                                id="ctl08_ctl06_stMain_ctl28_dgForms_row_2" style="background-color: rgb(244, 242, 242);">
                                <td>3</td>
                                <td valign="top">Sandra Margarita Morales De Aquino</td>
                                <td>Privado</td>
                                <td>28/10/2018</td>
                                <td>17:00</td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl00','')"><i class="fa fa-check-square-o"></i></a></td>
                                <td
                                    class="smallText" align="right" style="white-space:nowrap;"><a onclick="window.open('ReportPDFViewer.aspx?Report=/ccbcfw/Arena/Forms/Form Printer&Person=1&FormInstance=2', 'contribPopUp13915','width=800,height=800,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=50,top=50');return false;"
                                        class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl01','')"><i class="fa fa-list"></i></a></td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a onclick="return confirmDGDelete(this, 'Are you sure you want to delete this form instance?', '#F4F2F2', '#FFFFFF', '#fefebb');"
                                            title="Delete this form instance" class="btn btn-danger" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl04','')"><i class="fa fa-trash"></i></a></td>
                            </tr>
                            <tr class="listItem" valign="top" onmouseover="this.style.backgroundColor='#E8E5E5';" onmouseout="this.style.backgroundColor='#F4F2F2';"
                                id="ctl08_ctl06_stMain_ctl28_dgForms_row_2" style="background-color: rgb(244, 242, 242);">
                                <td>4</td>
                                <td valign="top">Angelica De Aquino Flores</td>
                                <td>Chico</td>
                                <td>28/10/2018</td>
                                <td>17:00</td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl00','')"><i class="fa fa-clock-o"></i></a></td>
                                <td
                                    class="smallText" align="right" style="white-space:nowrap;"><a onclick="window.open('ReportPDFViewer.aspx?Report=/ccbcfw/Arena/Forms/Form Printer&Person=1&FormInstance=2', 'contribPopUp13915','width=800,height=800,toolbar=0,menubar=0,location=0,status=0,scrollbars=1,resizable=1,left=50,top=50');return false;"
                                        class="btn btn-default" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl01','')"><i class="fa fa-list"></i></a></td>
                                <td class="smallText" align="right" style="white-space:nowrap;"><a onclick="return confirmDGDelete(this, 'Are you sure you want to delete this form instance?', '#F4F2F2', '#FFFFFF', '#fefebb');"
                                            title="Delete this form instance" class="btn btn-danger" href="javascript:__doPostBack('ctl08$ctl06$stMain$ctl28$dgForms$ctl05$ctl04','')"><i class="fa fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table><input type="hidden" name="ctl08$ctl06$stMain$ctl28$dgForms$dgForms_mpMergeDocuments_hfTarget" id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_mpMergeDocuments_hfTarget">
                    <div
                        id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_mpMergeDocuments_pnlMPE" style="display: none; position: fixed; z-index: 100001;">
                        <div id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_mpMergeDocuments_container" class="modal-container">
                            <div id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_mpMergeDocuments_content" class="modal-content">
                                <div id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_mpMergeDocuments_phMPE">

                                </div>
                            </div><a title="Close" class="modal-close" onclick="$find('dgForms_mpMergeDocuments').hide();"></a>
                            <div
                                class="modal-buttons">
                                <input type="submit" name="ctl08$ctl06$stMain$ctl28$dgForms$dgForms_btnCancelMerge" value="Cancel" id="ctl08_ctl06_stMain_ctl28_dgForms_dgForms_btnCancelMerge"
                                    class="smallText" style="width:100px;">
                        </div>
                </div>
            </div>

            <div id="dgForms_mpMergeDocuments_backgroundElement" class="modalBackground" style="display: none; position: fixed; left: 0px; top: 0px; z-index: 10000;"></div>
        </div>
    </div>

</div>
</div>
</div>
</div>



</body>
</html>