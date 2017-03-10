<script src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/js/Funciones/servidorTRsuper.js"></script><div id="navbar" class="navbar-collapse collapse" >
  <ul class="nav navbar-nav">
    <li id="inicio"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/inicio">Inicio</a></li>
    <li id="escuelas"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/escuelas">Buscar Escuela</a></li>
    <li class="dropdown" id="esc" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escuela <span class="caret "></span></a>
      <ul class="dropdown-menu">
        <li ><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Escuela">Registrar Escuela</a></li>
        <li role="separator" class="divider"></li>
        <li id="tbl"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/tbl/Escuela">Gestión Escuela</a></li>
      </ul>
    </li>
    <li id="contacto"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/contacto">Contacto</a></li>
  </ul>
  <ul class="nav navbar-nav  navbar-right">
    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zona <?php print $_SESSION['ZONA'] ?><span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li> <a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/Supervision/<?php print $_SESSION['CCT'] ?>">Cambiar Informacion</a></li>
        <li><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/frm/contrasenia">Cambiar Contraseña</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/salir">Cerrar Sesión</a></li>
      </ul>
    </li>
  </ul>
</div>