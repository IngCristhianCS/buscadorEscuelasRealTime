<?php
 $con=new FuncionesSql();
if (isset($_POST['valor'])){
	$respuesta = $con->seEscuela($_POST['valor']);
	$num=$con->num_rows($respuesta);
	if ($num>0) {
	    $resultados_row = $con->fetch_array($respuesta);
	}
}
?>
<input type="hidden" id="longitud"  value="<?php print $resultados_row['longitud'] ?>">
<input type="hidden" id="latitud" value="<?php print $resultados_row['latitud'] ?>">
<input type="hidden" id="heading" value="<?php print $resultados_row['heading'] ?>">
<input type="hidden" id="pitch" value="<?php print $resultados_row['pitch'] ?>">
<div class="row">
	<div class="col-md-6">
		<div id="map" style="width:100%;height:500px"></div>
		<div id="save-widget">
			<input type="button" id="cerrarInformacion" value="X Ocultar">
			<input type="button" id="abrirInformacion" value="> Mostrar">
			<div >
			    <b>Modo de Llegar: </b>
			    <select id="mode">
			      <option value="DRIVING">Automovil</option>
			      <option value="WALKING">Caminando</option>
			    </select>
			</div>
			<div id="informacion">
			<h4><?php print $resultados_row['nombre'] ?></h4>
			<b>Director:</b> <?php print  $resultados_row['director'] ?><br>
			<b>Correo electrónico:</b> <?php print $resultados_row['email'] ?><br>
			<b>Teléfono:</b> <?php print $resultados_row['telefono'] ?><br>
			<b>Turno:</b> <?php print $resultados_row['turno'] ?>
			</div>
	    </div>
	</div>
	<div class="col-md-6">
		<div id="pano" style="width:100%;height: 86vh;"></div>
	</div>
</div>
<script type="text/javascript">
	(function(){
		inicializa();
		$('#abrirInformacion').hide();
		$('#cerrarInformacion').click( function(){
	        $('#informacion').hide();$('#cerrarInformacion').hide();
	        $('#abrirInformacion').show();
	    });
	    $('#abrirInformacion').click( function(){
	        $('#informacion').show();$('#abrirInformacion').hide();
	        $('#cerrarInformacion').show();
	    });
	})();
</script>