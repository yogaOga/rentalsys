<?php
/* @var $this TQuotationController */
/* @var $model TQuotation */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'tquotation-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php
if ($form->errorSummary($model)) {
    echo '<div class="notif error">' . $form->errorSummary($model) . '</div>';
    echo '<div class="notif error">' . $form->errorSummary($modelDetails) . '</div>';
}
?>


<table>
    <tr>
        <td>
            <div class="input">
                <?php echo $form->labelEx($model, 'marketing_id'); ?>
                <?php echo $form->textField($model, 'marketing_id'); ?>
                <span class="error-message"><?php echo $form->error($model, 'marketing_id'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'no_quotation'); ?>
                <?php echo $form->textField($model, 'no_quotation', array('value' => $this->noQuotation(), 'readonly' => true)); ?>
                <span class="error-message"><?php echo $form->error($model, 'no_quotation'); ?></span>
            </div>
            <?php // echo $form->labelEx($model,'customer_id');  ?>
            <?php echo $form->hiddenField($model, 'customer_id'); ?>
            <span class="error-message"><?php echo $form->error($model, 'customer_id'); ?></span>

            <div class="input">
                <?php echo $form->labelEx($model, 'customer_name'); ?>
                <?php echo $form->textField($model, 'customer_name', array('size' => 60, 'maxlength' => 100, 'onclick' => '$("#mydialog").dialog("open"); return false;')); ?>
                <span class="error-message"><?php echo $form->error($model, 'customer_name'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'phone'); ?>
                <?php echo $form->textField($model, 'phone', array('size' => 13, 'maxlength' => 13)); ?>
                <span class="error-message"><?php echo $form->error($model, 'phone'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'contact_person'); ?>
                <?php echo $form->textField($model, 'contact_person', array('size' => 50, 'maxlength' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'contact_person'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'note'); ?>
                <?php echo $form->textArea($model, 'note', array('rows' => 6, 'cols' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'note'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'name_of_employer'); ?>
                <?php echo CHtml::textField('name','',array('onclick'=>'$("#dialog2").dialog("open"); return false;')) ?>
                <?php //echo CHtml::textField('name', array('onclick'=>'$("#dialog2").dialog("open"); return false;')); ?>
                <?php echo $form->hiddenField($model,'name_of_employer'); ?>
                <span class="error-message"><?php echo $form->error($model, 'name_of_employer'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'include_driver'); ?>
                <?php echo $form->checkBox($model, 'include_driver', array('checked' => true)); ?>
                <span class="error-message"><?php echo $form->error($model, 'include_driver'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'include_ppn'); ?>
                <?php echo $form->checkBox($model, 'include_ppn', array('checked' => true)); ?>
                <span class="error-message"><?php echo $form->error($model, 'include_ppn'); ?></span>
            </div>
        </td>
        <td>
            <div class="input">
                <?php echo $form->labelEx($model, 'date'); ?>
                <?php echo $form->textField($model, 'date'); ?>
                <span class="error-message"><?php echo $form->error($model, 'date'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'address'); ?>
                <?php echo $form->textArea($model, 'address', array('rows' => 6, 'cols' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'address'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'fax'); ?>
                <?php echo $form->textField($model, 'fax', array('size' => 20, 'maxlength' => 20)); ?>
                <span class="error-message"><?php echo $form->error($model, 'fax'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'handphone_customer'); ?>
                <?php echo $form->textField($model, 'handphone_customer', array('size' => 15, 'maxlength' => 15)); ?>
                <span class="error-message"><?php echo $form->error($model, 'handphone_customer'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'office_boss'); ?>
                <?php echo $form->dropDownlist($model, 'office_boss', array('SUPERVISOR' => 'SUPERVISOR', 'MARKETING' => 'MARKETING'), ARRAY('empty' => '-select-')) ?>
                <span class="error-message"><?php echo $form->error($model, 'office_boss'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'hanphone'); ?>
                <?php echo $form->textField($model, 'hanphone', array('size' => 15, 'maxlength' => 15)); ?>
                <span class="error-message"><?php echo $form->error($model, 'hanphone'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'email'); ?></span>
            </div>
        </td>
    </tr>
</table>

<?php echo $this->renderPartial('_gridQuotation', array('modelDetails' => $modelDetails, 'modelDetail' => $modelDetail)) ?>

<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.maskedinput.min.js', CClientScript::POS_END); ?>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#TQuotation_marketing_id, #TQuotation_no_quotation").mandatoryPlugin();
        $("#TQuotation_date").datepicker({dateFormat: "yy-mm-dd"});
        $("#TQuotation_phone").mask("(999) 999-99999");
        $("#TQuotation_handphone_customer").mask("9999-99999999");
    });
</script>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    'options' => array(
        'title' => 'Search Customer',
        'autoOpen' => false,
        'modal' => true,
        'width' => 600,
        'height' => 500,
        'resizable' => false,
    ),
));
$modCos = new MCostumerData;
$modCos->unsetAttributes();
if (isset($_GET['MCostumerData'])) {
    $modCos->attributes = $_GET['MCostumerData'];
}
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mcostumer-data-grid',
    'dataProvider' => $modCos->search(),
    'filter' => $modCos,
    'columns' => array(
        array(
            'header' => 'Pilih',
            'type' => 'raw',
            'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small", 
                                    "id" => "selectKar",
                                    "onClick" => "
                                        $(\'#' . Chtml::activeId($model, 'customer_id') . '\').val(\'$data->id\');
                                         $(\"#TQuotation_customer_id\").val(\"$data->id\");
                                         $(\"#TQuotation_customer_name\").val(\"$data->name_cmd\");
                                         $(\"#TQuotation_phone\").val(\"$data->office_phone_cmd\");
                                         $(\"#TQuotation_contact_person\").val(\"$data->home_phone_cmd\");
                                         $(\"#TQuotation_address\").val(\"$data->address_cmd\");
                                         $(\"#TQuotation_fax\").val(\"$data->fax_cmd\");
                                         $(\'#mydialog\').dialog(\'close\');
                                        return false;"))',
        ),
        'name_cmd',
        'office_phone_cmd',
        'home_phone_cmd',
        'home_address_pic',
        'address_cmd',
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
/** End Widget * */
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialog2',
    'options' => array(
        'title' => 'Search Karyawan',
        'autoOpen' => false,
        'modal' => true,
        'width' => 600,
        'height' => 500,
        'resizable' => false,
    ),
));
$modKar = new MKaryawan;
$modKar->unsetAttributes();
if (isset($_GET['MKaryawan'])) {
    $modKar->attributes = $_GET['MKaryawan'];
}
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mkaryawan-grid',
    'dataProvider' => $modKar->search(),
    'filter' => $modKar,
    'columns' => array(
        array(
            'header' => 'Pilih',
            'type' => 'raw',
            'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small", 
                                    "id" => "selectKar",
                                    "onClick" => "
                                        $(\'#' . Chtml::activeId($model, 'name_of_employer') . '\').val(\'$data->id\');
                                         
                                         $(\"#TQuotation_name_of_employer\").val(\"$data->id\");
                                         $(\"#name\").val(\"$data->name\");
                                        
                                         $(\'#dialog2\').dialog(\'close\');
                                        return false;"))',
        ),
        'name',
        'address',
        'phone',
        'email',
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
/** End Widget * */
?>
