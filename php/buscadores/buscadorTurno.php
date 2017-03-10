 <?php
$turno = $_POST['id'];
$respuesta = $con->seTurno($turno);
print ('<div style=" height:115px; overflow-x:hidden; overflow: scroll;"><h5>Selecciona uno Por Favor.</h5>');
while ($resultados_row = $con->fetch_array($respuesta)) {
    print '<div class="suggest-turno resultado"
    data="'.$resultados_row['turno'].
    '" id="'.$resultados_row['id_turno'].'">
     Turno: '.$resultados_row['turno'].'</div>';
}
print ('</div>');
?>