<script src="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/js/Funciones/servidorTRinvitado.min.js"></script><div id="navbar" class="navbar-collapse collapse" >
  <ul class="nav navbar-nav">
    <li id="inicio"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/inicio">Inicio</a></li>
    <li id="escuelas"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/escuelas">Buscar Escuela</a></li>
    <li id="contacto"><a href="http://<?php print $_SERVER['SERVER_ADDR'];?>/ixtapaluca/contacto">Contacto</a></li>

  </ul>
  <ul class="nav navbar-nav  navbar-right">
    <li class="dropdown" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Iniciar Sesion<span class="caret"></span></a>
      <ul class="dropdown-menu">
        <form id="loginForm"  action="ingresar" method="post">
          <fieldset id="body">
              <div class="form-group">
                  <input type="text" name="usuario" id="email" placeholder="Usuario" class="form-control" required/>
              </div>
               <div class="form-group">
                  <input type="password" placeholder="Contraseña" name="pass" id="password"  class="form-control" required/>
              </div>
              <div class="form-group">
                <input type="submit" id="login" value="Ingresar" class="btn btn-success" name="btn" />
              </div>
          </fieldset>
        </form>
      </ul>
    </li>
  </ul>
</div>