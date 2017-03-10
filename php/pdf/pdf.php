<?php
$con = new FuncionesSql();
if (isset($_POST['s'])) {
    print ('<iframe src="http://'.$_SERVER['SERVER_ADDR'].'/ixtapaluca'.'/pdf/'.$_POST['s'].'" frameborder="0" marginheight="0" marginwidth="0" width="100%" height="100%" scrolling="auto" allowfullscreen></iframe>');
} else {
    ob_start();
    if (isset($_GET['t'])&&isset($_SESSION['TIPO_USUARIO'])) {
        include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/includes/cabeceraPdf.php');
        include ($_SERVER['DOCUMENT_ROOT'].'/ixtapaluca'.'/php/pdf/cuerpos/pdf'.$_GET['t'].'.min.php');
    } else {
        inicio();
    }
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'../../librerias/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'A4', 'es');
        //$html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output($_GET['t'].'  '.date('d/m/Y  g:i A').'.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
}

    ?>
