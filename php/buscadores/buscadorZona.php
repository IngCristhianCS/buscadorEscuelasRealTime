<?php
$zona = $_POST['id'];
if ($_POST['f']=="e") {
	$respuesta = $con->seZona($zona);
} else {
	$respuesta = $con->seZonaBF($zona);
}
print ('<div style=" height:115px; overflow-x:hidden; overflow: scroll;"><h5>Selecciona uno Por Favor.</h5>');
while ($resultados_row = $con->fetch_array($respuesta)) {
    print '<div class="suggest-cp resultado"
    data="'.$resultados_row['zona'].
    '" id="'.$resultados_row['id_zona'].'">
     Zona: '.$resultados_row['zona'].'</div>';
}
print ('</div>');
?>