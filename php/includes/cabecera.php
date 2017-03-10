<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta http-equiv=“X-UA-Compatible” content=“IE=7″>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Buscador Escuelas Ixtapaluca">
    <meta name="author" content="Cristhian Castillo Soriano">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Educacion Ixtapaluca</title>
   <?php include("css.php"); ?>
   <script src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/js/jquery.min.js"></script>
   <script src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/js/alertas/sweetalert-dev.js"></script>
  </head>
  <body onload="inicializar()">
  <div id="cabeza">
    <div  class="row">
      <div class="col-md-4 col-sm-6 col-xs-6" ><img src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/img/logow.png"></div>
      <div class="col-md-8 col-sm-6 col-xs-6" id="baner"><h2>Dirección de Educación</h2></div>
    </div>
    <nav class="navbar navbar-inverse"  >
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
          <?php if (isset($_SESSION['TIPO_USUARIO'])) {
            if ($_SESSION['TIPO_USUARIO']=='administrador') {
              include('php/menus/menuAdministrador.min.php');
            } else{
              include('php/menus/menuSupervisor.min.php');
            }
          } else {
            include('php/menus/menuInvitado.min.php');
          }
          ?>
      </div>
    </nav>
  </div>
  <a href="#" class="scroll-top"><img src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/images/arriba.png"></a>