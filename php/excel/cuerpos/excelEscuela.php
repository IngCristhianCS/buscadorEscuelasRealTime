<?php
$respuesta_super = $con->seEscuelasZona();
$objPHPExcel = new PHPExcel();

$objPHPExcel->
    getProperties()
        ->setCreator("AstaSoft")
        ->setLastModifiedBy("AstaSoft")
        ->setTitle("Exportar excel desde mysql")
        ->setSubject("AstaSoft")
        ->setDescription("Documento generado con PHPExcel")
        ->setKeywords("Ixtapaluca  con  phpexcel")
        ->setCategory("ciudades");
$i = 1;

$objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A'.$i, 'CCT')
        ->setCellValue('B'.$i, 'NOMBRE')
        ->setCellValue('C'.$i, 'DIRECTOR')
        ->setCellValue('D'.$i, 'SUBDIRECTOR')
        ->setCellValue('E'.$i, 'TELEFONO')
        ->setCellValue('F'.$i, 'EMAIL')
        ->setCellValue('G'.$i, 'ORG. SOCIAL')
        ->setCellValue('H'.$i, 'NIVEL')
        ->setCellValue('I'.$i, 'TURNO')
        ->setCellValue('J'.$i, 'ZONA')
        ->setCellValue('K'.$i, 'SUBSISTEMA')
        ->setCellValue('L'.$i, 'DIRECCION')
        ->setCellValue('M'.$i, 'COLONIA O ASENTAMIENTO')
        ->setCellValue('N'.$i, 'CODIGO POSTAL');
$i++;
while ($resultados_super = $con->fetch_array($respuesta_super)) {
    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, $resultados_super['cct'])
            ->setCellValue('B'.$i, $resultados_super['nombre'])
            ->setCellValue('C'.$i, $resultados_super['director'])
            ->setCellValue('D'.$i, $resultados_super['subdirector'])
            ->setCellValue('E'.$i, $resultados_super['telefono'])
            ->setCellValue('F'.$i, $resultados_super['email'])
            ->setCellValue('G'.$i, $resultados_super['org_social'])
            ->setCellValue('H'.$i, $resultados_super['nivel'])
            ->setCellValue('I'.$i, $resultados_super['turno'])
            ->setCellValue('J'.$i, $resultados_super['zona'])
            ->setCellValue('K'.$i, $resultados_super['subsistema'])
            ->setCellValue('L'.$i, $resultados_super['direccion'])
            ->setCellValue('M'.$i, $resultados_super['nom_asentamiento'])
            ->setCellValue('N'.$i, $resultados_super['codigo_postal']);

    $i++;
}
$objPHPExcel->setActiveSheetIndex(0);
$objActSheet = $objPHPExcel->getActiveSheet();
$i=1;
for ($col = 'A'; $col != 'O'; $col++){
    $objActSheet->getColumnDimension($col)->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getStyle($col.$i)->applyFromArray(
        array(
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => '5cb85c')
            )
        )

);
}  ?>