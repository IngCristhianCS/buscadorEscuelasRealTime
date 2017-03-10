<?php
if (isset($_SESSION['CCT'])&&$_SESSION['CCT']=="DIREDUIXTA") {
    $respuesta_super = $con->sePerEsc();
    $objPHPExcel = new PHPExcel();

    $objPHPExcel->
        getProperties()
            ->setCreator("AstaSoft")
            ->setLastModifiedBy("AstaSoft")
            ->setTitle("Exportar excel desde mysql")
            ->setSubject("AstaSoft")
            ->setDescription("Documento generado con PHPExcel")
            ->setKeywords("Ixtapaluca  con  phpexcel")
            ->setCategory("personal");
    $i = 1;

    $objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A'.$i, 'RFC')
            ->setCellValue('B'.$i, 'NOMBRE')
            ->setCellValue('C'.$i, 'SUELDO')
            ->setCellValue('D'.$i, 'CCT ESCUELA')
            ->setCellValue('E'.$i, 'NOMBRE ESCUELA');
    $i++;
    while ($resultados_super = $con->fetch_array($respuesta_super)) {
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A'.$i, $resultados_super['rfc'])
                ->setCellValue('B'.$i, $resultados_super['nombre'].' '.$resultados_super['a_paterno'].' '.$resultados_super['a_materno'])
                ->setCellValue('C'.$i, $resultados_super['sueldo'])
                ->setCellValue('D'.$i, $resultados_super['cct'])
                ->setCellValue('E'.$i, $resultados_super['nombre_e']);

        $i++;
    }
    $objPHPExcel->setActiveSheetIndex(0);
    $objActSheet = $objPHPExcel->getActiveSheet();
    $i=1;
    for ($col = 'A'; $col != 'F'; $col++){
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