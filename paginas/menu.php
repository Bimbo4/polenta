<?php
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>

    <title>Polenta</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="dist/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/github.min.css">



    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="lib/hash.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="dist/bootstrap-clockpicker.min.js"></script>

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
<header>
    <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header visible-xs">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><h2>Polenta</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="#header">
                <img src="img/polenta.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href='?op=historia'>HISTORIA</a></li>
                <li><a href='?op=reservacion'>RESERVACION</a></li>
                <li><a href="?op=carta">* MENU *</a></li>

                
                <li><a href="?op=calidad">CALIDAD</a></li>
                <li><a href="?op=publicidad">PUBLICIDAD</a></li>
                
          
  
                            <?php
                                if(isset($_SESSION['activo'])){
                                    if($_SESSION['activo'] == 1){ ?>
                                        <div class="dropdown">
                                      <li><a href="?op=login"> . <?php echo $_SESSION['USUARIO'];?> . </a></li>
                                                  <div class="dropdown-content">
                                                      <p class="text-left"><strong><?php echo $_SESSION['NOMBRE'].' '.$_SESSION['AP'];?></strong></p>
                                                       <p class="text-left small"><?php echo $_SESSION['CORREO'];?></p>
                                                  <a href="?op=perfil">Actualizar Datos</a>
                                                  <a href="?op=logout">Cerrar Sesion</a>
                                                 
                                                  </div>
                                                     </div>
                                        
                                    <?php 
                                    }
                                }else{?>
                                     <li><a href="?op=login">INICIAR SESION</a></li>
                                <?php
                                }
                            ?>
  
  
  


</div>
                
                
                
                
              
                
                

                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="?op=header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->
</header>

