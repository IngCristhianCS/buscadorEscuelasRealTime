<?php
$codigo = $_POST['codigo'];
$respuesta = $con->seCodigo($codigo);
print ('<div style=" height:115px;  overflow-x:hidden; overflow: scroll;">');
while ($resultados_row = $con->fetch_array($respuesta)) {
    print '<div class="suggest-cp resultado"
    data="'.$resultados_row['municipio'].
    '" data2="'.$resultados_row['tipo'].' '.$resultados_row['nom_asentamiento'].
    '" data3="'.$resultados_row['codigo_postal'].
    '" id="'.$resultados_row['id_asentamiento'].'"> '
    .$resultados_row['codigo_postal'].
    '  Asentamiento: '.$resultados_row['tipo'].' '.$resultados_row['nom_asentamiento'].
    '</div>';
}
print ('</div>');
?>