 <?php
$nivel = $_POST['id'];
$respuesta = $con->seNivel($nivel);
print ('<div style=" height:115px; overflow-x:hidden; overflow: scroll;"><h5>Selecciona uno Por Favor.</h5>');
while ($resultados_row = $con->fetch_array($respuesta)) {
    print '<div class="suggest-nivel resultado"
    data="'.$resultados_row['nivel'].
    '" id="'.$resultados_row['id_nivel'].'">
     Nivel: '.$resultados_row['nivel'].'</div>';
}
print ('</div>');
?>