<?php
$campo = $_POST['cct'];
$respuesta = $con->seEscuelaBusc("cct",$campo);
if (isset($_SESSION['TIPO_USUARIO'])) {
	while ($resultados_row = $con->fetch_array($respuesta)) {
	    print('
	    <div class="suggest-cp resultado"
	    data="'.$resultados_row['cct'].
	    '" data2="'.$resultados_row['nombre'].
	    '"id="'.$resultados_row['cct'].'"> '
	    .$resultados_row['cct'].
	    '  Nom. Esc.: '.$resultados_row['nombre'].
	    '</div>'
	    );
	}
}
?>