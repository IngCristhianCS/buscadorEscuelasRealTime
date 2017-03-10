<script type="text/javascript">$(document).ready(function(){$("#contacto").addClass("active");});</script>
<div class="row">
	<div class="col-md-6">
		<div id="map" style="width:100%;height:500px" class="panel-body"></div>
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
			<h4>Dirección de Educación</h4>
			<b>Titular:</b> Prof. Teodorico Rayo Valle<br>
			<b>Correo electrónico:</b> educación@ixtapaluca.gob.mx<br>
			<b>Horarios de servicio:</b> lunes a viernes de 9:00 a 16:00hrs, sábados de 9:00 a 13:00hrs.<br>
			<b>Teléfono:</b> 26- 06-92-48
			</div>
	    </div>
	</div>
	<div class="col-md-6" class="panel-body">
		<div id="pano" style="width:100%;height:500px"></div>
	</div>
</div>

<script src="js/mapaContacto.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8jcBHg9IeemVmD2aKa53dcDaYwC_YQVA&signed_in=true&callback=inicializa">
</script>
