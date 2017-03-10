 <?php
$funcion = $_POST['id'];
$respuesta = $con->seFuncion($funcion);
print ('<div style=" height:115px; overflow-x:hidden; overflow: scroll;"><h5>Selecciona uno Por Favor.</h5>');
while ($resultados_row = $con->fetch_array($respuesta)) {
    echo '<div class="suggest-cp resultado"
    data="'.$resultados_row['funcion'].
    '" id="'.$resultados_row['id_funcion'].'">
    '.$resultados_row['funcion'].'</div>';
}
print ('</div>');
?>