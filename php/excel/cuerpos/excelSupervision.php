<?php
if (isset($_SESSION['CCT'])&&$_SESSION['CCT']=="DIREDUIXTA") {
    $respuesta_super = $con->seSupervisiones();
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
            ->setCellValue('B'.$i, 'SEDE')
            ->setCellValue('C'.$i, 'OFICINA')
            ->setCellValue('D'.$i, 'No. ESCUELAS')
            ->setCellValue('E'.$i, 'No. GRUPOS')
            ->setCellValue('F'.$i, 'No. ALUMNOS')
            ->setCellValue('G'.$i, 'ZONA')
            ->setCellValue('H'.$i, 'SUBSISTEMA');
    $i++;
    while ($resultados_super = $con->fetch_array($respuesta_super)) {
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $resultados_super['cct'])
                ->setCellValue('B'.$i, $resultados_super['sede'])
                ->setCellValue('C'.$i, $resultados_super['oficina'])
                ->setCellValue('D'.$i, $resultados_super['num_escuelas'])
                ->setCellValue('E'.$i, $resultados_super['num_grupos'])
                ->setCellValue('F'.$i, $resultados_super['num_alumnos'])
                ->setCellValue('G'.$i, $resultados_super['zona'])
                ->setCellValue('H'.$i, $resultados_super['subsistema']);

        $i++;
    }
    $objPHPExcel->setActiveSheetIndex(0);
    $objActSheet = $objPHPExcel->getActiveSheet();
    $i=1;
    for ($col = 'A'; $col != 'I'; $col++){
        $objActSheet->getColumnDimension($col)->setAutoSize(true);
        $objPHPExcel->getActiveSheet()->getStyle($col.$i)->applyFromArray(
            array(
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => '5cb85c')
                )
            )
        );
    }
} else {
    inicio();
}
?>