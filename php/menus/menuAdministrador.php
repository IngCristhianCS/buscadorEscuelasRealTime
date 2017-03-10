<script src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/js/Funciones/servidorTR.js"></script>
<div id="navbar" class="navbar-collapse collapse" >
  <ul class="nav navbar-nav">
    <li id="inicio"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/inicio">Inicio</a></li>
    <li class="dropdown" id="esc" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escuela <span class="caret "></span></a>
      <ul class="dropdown-menu">
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Escuela">Registrar Escuela</a></li>
        <li role="separator" class="divider"></li>
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/tbl/Escuela">Gestión Escuela</a></li>
      </ul>
    </li>
    <li class="dropdown" id="sup" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Supervisión<span class="caret "></span></a>
      <ul class="dropdown-menu">
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Supervision">Registrar Supervisión</a></li>
        <li role="separator" class="divider"></li>
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/tbl/Supervision">Gestión Supervisión</a></li>
      </ul>
    </li>
    <li class="dropdown" id="zon" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zona<span class="caret "></span></a>
      <ul class="dropdown-menu">
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Zona">Registrar Zona</a></li>
        <li role="separator" class="divider"></li>
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/tbl/Zona">Gestión Zona</a></li>
      </ul>
    </li>
    <li class="dropdown" id="per" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal<span class="caret "></span></a>
      <ul class="dropdown-menu">
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Personal">Registrar Personal</a></li>
        <li role="separator" class="divider"></li>
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/tbl/Personal">Gestión Personal</a></li>
      </ul>
    </li>
  </ul>
  <ul class="nav navbar-nav  navbar-right">
    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php print $_SESSION['ZONA'] ?><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/contrasenia">Cambiar Contraseña</a></li>
        <li><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/salir">Cerrar Sesión</a></li>
      </ul>
    </li>
  </ul>
</div>