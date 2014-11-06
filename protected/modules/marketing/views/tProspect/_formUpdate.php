<?php
/* @var $this TProspectController */
/* @var $model TProspect */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'tprospect-form',
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
}
if ($form->errorSummary($history)) {
    echo '<div class="notif error">' . $form->errorSummary($history) . '</div>';
}
?>



<div class="input">
    <?php echo $form->labelEx($model, 'prospect_id'); ?>
    <?php echo $form->textField($model, 'prospect_id', array('readonly' => true, 'size' => 45, 'maxlength' => 45)); ?>
    <span class="error-message"><?php echo $form->error($model, 'prospect_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'marketing_id'); ?>
    <?php echo $form->textField($model, 'marketing_id'); ?>
    <span class="error-message"><?php echo $form->error($model, 'marketing_id'); ?></span>
</div>

<div class="input">
    <table style="margin-bottom: -10px">
        <tr >
            <td width="47%" style="border: 0px; background-color: rgb(247, 247, 247);" >
                <?php echo $form->labelEx($model, 'company_name'); ?>
                <?php echo $form->textField($model, 'company_name', array('size' => 45, 'maxlength' => 45,'placeholder'=>'Input company name')); ?>
            </td>
            <td style="border: 0px; background-color: rgb(247, 247, 247);">
                <?php echo $form->dropDownList($model, 'company_title', Params::companyTitle(),array('empty'=>'-select-')); ?>
            </td>
        </tr>
    </table>
    <span class="error-message"><?php echo $form->error($model, 'company_name'); ?></span>
</div>
<br>

<div class="input">
    <?php echo $form->labelEx($model, 'company_address'); ?>
    <?php echo $form->textArea($model, 'company_address', array('rows' => 6, 'cols' => 10)); ?>
    <span class="error-message"><?php echo $form->error($model, 'company_address'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'phone'); ?>
    <?php echo $form->textField($model, 'phone', array('size' => 25, 'maxlength' => 25)); ?>
    <span class="error-message"><?php echo $form->error($model, 'phone'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'fax'); ?>
    <?php echo $form->textField($model, 'fax', array('size' => 25, 'maxlength' => 25)); ?>
    <span class="error-message"><?php echo $form->error($model, 'fax'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'l_business_type'); ?>
    <?php echo $form->dropDownList($model, 'l_business_type', CHtml::listData(LBusinessType::model()->findAll(), 'id', 'business_type'), array('empty' => '-select-')); ?>
    <span class="error-message"><?php echo $form->error($model, 'l_business_type'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'l_ownership'); ?>
    <?php echo $form->dropDownList($model, 'l_ownership', CHtml::listData(LOwnership::model()->findAll(), 'id', 'name_owner'), array('empty' => '-select-')); ?>
    <span class="error-message"><?php echo $form->error($model, 'l_ownership'); ?></span>
</div>

<div class="input">
    <table style="margin-bottom: -10px">
        <tr >
            <td width="47%" style="border: 0px; background-color: rgb(247, 247, 247);" >
                <?php echo $form->labelEx($model, 'pic'); ?>
                <?php echo $form->textField($model, 'pic', array('size' => 50, 'maxlength' => 50,'placeholder'=>'Input perosin in charge')); ?>
            </td>
            <td style="border: 0px; background-color: rgb(247, 247, 247);">
                <?php echo $form->dropDownList($model, 'pic_title', array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Ms' => 'Ms')); ?>
            </td>
        </tr>

    </table>
    <span class="error-message"><?php echo $form->error($model, 'company_name'); ?></span>
</div>
<br>

<div class="input">
    <?php echo $form->labelEx($model, 'occuption'); ?>
    <?php echo $form->dropDownList($model, 'occuption', array('Direktur' => 'Direktur', 'Manager' => 'Manager', 'Staff' => 'Staff', 'Etc'=>'Etc'),array('empty'=>'-select-')); ?>
    <span class="error-message"><?php echo $form->error($model, 'occuption'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'email'); ?>
    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100)); ?>
    <span class="error-message"><?php echo $form->error($model, 'email'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'mobile_phone'); ?>
    <?php echo $form->textField($model, 'mobile_phone'); ?>
    <span class="error-message"><?php echo $form->error($model, 'mobile_phone'); ?></span>
</div>
<table>
    <thead>
		<th>Status Prospect</th>
                <th>Type Prospect</th>
                <th>Merk vehicles</th>
                <th>Competitor</th>
                <th>Description Prospect</th>
                <th>MO Plan</th>
    </thead>
    <?php
        foreach($history AS $tampilData):
          
    echo "<tr>
       
            <td>".$tampilData['status_prospect']."</td>
            <td>".$tampilData['type_prospect']."</td>
            <td>".$tampilData['unit_need']."</td>  
            <td>".$tampilData['competitor']."</td>
            <td>".$tampilData['description_prospect']."</td>
            <td>".$tampilData['next_plan']."</td>
               
         </tr>"; 
        endforeach;
   
    ?>
    
</table>
<?php
/*
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'tprospect-grid',
    'dataProvider' => $history->search(),
    //'filter'=>$model,
    'columns' => array(
        'status_prospect',
        'type_prospect',
        'unit_need',
        'competitor',
        'description_prospect',
    ),
));*/
?>
<br>
<br>
<?php echo CHtml::link('Add',Yii::app()->controller->createUrl('TProspect/details',array( 'id'=>$model->id,)),
        array(
         //   'onclick'=>'$("#dialogHistory").dialog("open"); return false;',
            'class'=>'button',
       //     'target'=>'pesan'
            )); ?>
<br>
<br>
<br>
<div class="submit">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Update'); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#prospect_id, #<?= CHtml::activeId($model, 'prospect_id') ?>, #<?= CHtml::activeId($model, 'marketing_id') ?>").textMandatoryReadOnly();
        $("#<?= CHtml::activeId($model, 'company_name') ?>, #<?= CHtml::activeId($model, 'phone') ?>, #<?= CHtml::activeId($model, 'fax') ?>,#<?= CHtml::activeId($model, 'email') ?>,#<?=CHtml::activeId($model, 'status_prospect')?>,#<?=CHtml::activeId($model, 'type_prospect')?>,#<?=CHtml::activeId($model, 'unit_need')?>").textMandatoryFree();
        
        
        $("#<?= CHtml::activeId($model, 'company_name')?>, #<?= CHtml::activeId($model, 'pic')?>").textUppercase();
    
        $(".phone").mask("(999) 999-9999");
        $(".mobile").mask("9999-99999999");
    });
    
    function validateEmail(email){
        var emailReg = "^[\\w-_\.]*[\\w-_\.]\@[\\w]\.+[\\w]+[\\w]$";
        var regex = new RegExp(emailReg);
        return regex.test(email);
    }

</script>
