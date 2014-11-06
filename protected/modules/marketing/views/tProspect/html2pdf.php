<?php
    ob_start();
    echo $this->renderPartial('Introduce_Letter',array('model'=>$model)); 
    $content = ob_get_clean();
    $namepdf = $model->prospect_id;
    Yii::import('application.extensions.html2pdf.HTML2PDF');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'en');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->writeHTML($content,false);
        $html2pdf->Output("$namepdf.pdf");
        
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>