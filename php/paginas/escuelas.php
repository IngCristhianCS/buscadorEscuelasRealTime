<script type="text/javascript">$(document).ready(function(){$("#escuelas").addClass("active");});</script>
<div class="container">
  <h3>Hola, Bienvenido!</h3>
  <div class="row">
    <div class="col-xs-6 col-md-3 col-md-4">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Busqueda por</h3>
        </div>
        <div class="panel panel-success">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6 col-md-4"><h6>Buscar por Nombre: <input type="radio" name="grupo" id="grupo_0" checked></h6></div>
              <div class="col-xs-6 col-md-4"><h6>Buscar por CCT: <input type="radio" name="grupo" id="grupo_1" ></h6></div>
            </div>
            <div class="row" id="Nombre">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="Ingrese Nombre Escuela" name="bNombre" id="b_nombre_general"  class="form-control mayusculas" />
                </div>
              </div>
            </div>
            <div class="row" id="CCT">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="Ingrese CCT" name="bCCT" id="b_cct_general" class="form-control mayusculas" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-6 col-sm-9 col-md-8">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Resultado(s)</h3>
        </div>
        <div class="panel-body" id="resultado">
          <div style=" height:400px; overflow-y:hidden; overflow: scroll;">
            <table>
                <thead id="cabtab">
                    <tr>
                        <th >CCT</th>
                        <th >Nombre</th>
                        <th >Telefono(s)</th>
                        <th >Zona</th>
                        <th >Detalles</th>
                    </tr>
                </thead>
                <tbody id="resultadoEscuelaG">
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
