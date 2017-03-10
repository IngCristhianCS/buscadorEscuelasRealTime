<?php
require 'php/librerias/PHPExcel/Classes/PHPExcel.php';
$con = new FuncionesSql();
if ($_GET['t']) {
	include ('php/excel/cuerpos/excel'.$_GET['t'].'.php');
} else {
	inicio();
}
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$_GET['t'].'  '.date('d/m/Y  g:i A').'"');
header('Cache-Control: max-age=0');

$objWriter=PHPExcel_IOFactory::createWriter($objPHPExcel,'Excel2007');
$objWriter->save('php://output');
exit;

?>