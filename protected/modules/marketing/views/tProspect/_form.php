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
    <?php echo CHtml::textField('prospect_id','AUTOMATIC', array('readonly' => true, 'size' => 45, 'maxlength' => 45)); ?>
    <span class="error-message"><?php echo $form->error($model, 'prospect_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'marketing_id'); ?>
    <?php echo $form->textField($model, 'mo_name', array('readonly' => true)); ?>
    <span class="error-message"><?php echo $form->error($model, 'mo_name'); ?></span>
</div>

<div class="input">
    <table style="margin-bottom: -10px">
        <tr >
            <td width="47%" style="border: 0px; background-color: rgb(247, 247, 247);" >
                <?php echo $form->labelEx($model, 'company_name'); ?>
                <?php echo $form->textField($model, 'company_name', array('size' => 45, 'maxlength' => 45, 'placeholder' => 'Company Name')); ?>
            </td>
            <td style="border: 0px; background-color: rgb(247, 247, 247);">
                <?php echo $form->dropDownList($model, 'company_title', Params::companyTitle(), array('empty' => '-select-')); ?>
            </td>
        </tr>

    </table>
    <span class="error-message"><?php echo $form->error($model, 'company_name'); ?></span>
</div>
<br>

<div class="input">
    <?php echo $form->labelEx($model, 'company_address'); ?>
    <?php echo $form->textArea($model, 'company_address', array('rows' => 6, 'cols' => 10, 'placeholder'=>'Company Address')); ?>
    <span class="error-message"><?php echo $form->error($model, 'company_address'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'phone'); ?>
    <?php echo $form->textField($model, 'phone', array('size' => 25, 'maxlength' => 25, 'placeholder' => '(000) 000-000', 'class'=>'phone')); ?>
    <span class="error-message"><?php echo $form->error($model, 'phone'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'fax'); ?>
    <?php echo $form->textField($model, 'fax', array('size' => 25, 'maxlength' => 25, 'placeholder' => '(000) 000-000', 'class'=>'phone')); ?>
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
                <?php echo $form->textField($model, 'pic', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Person in Charge')); ?>
            </td>
            <td style="border: 0px; background-color: rgb(247, 247, 247);">
                <?php echo $form->dropDownList($model, 'pic_title', array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Ms' => 'Ms'), array('empty' => '-select-')); ?>
            </td>
        </tr>

    </table>
    <span class="error-message"><?php echo $form->error($model, 'company_name'); ?></span>
</div>
<br>
<div class="input">
    <?php echo $form->labelEx($model, 'occuption'); ?>
    <?php echo $form->dropDownList($model, 'occuption', Params::getOccupation(), array('empty' => '-select-')); ?>
    <span class="error-message"><?php echo $form->error($model, 'occuption'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'email'); ?>
    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 100, 'placeholder' => 'name@example.com')); ?>
    <span class="error-message"><?php echo $form->error($model, 'email'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'mobile_phone'); ?>
    <?php echo $form->textField($model, 'mobile_phone', array('placeholder' => '0812-34567890', 'class'=>'mobile')); ?>
    <span class="error-message"><?php echo $form->error($model, 'mobile_phone'); ?></span>
</div>
<div class="content">
    <table class="border" id="history">
        <thead>
            <tr>
                <th>Prospect Status</th>
                <th>Prospect Type</th>
                <th>Unit Need</th>
                <th>Competitor</th>
                <th>Description Prospect</th>
                <th>MO Plan</th>
            </tr>
        </thead>
        <tbody>
            <tr>

                <td><?php echo CHtml::activeDropDownList($history, "status_prospect", Params::prospectStatusLookup(), array('empty' => '-select-')); ?></td>
                <td><?php echo CHtml::activeDropDownList($history, "type_prospect", Params::prospectTypeLookup(), array('empty' => '-select-')); ?></td>
                <td><?php echo CHtml::activeTelField($history, "unit_need", array('placeholder' => 'Unit Need', 'class'=>'input')); ?></td>
                <td><?php echo CHtml::activeTelField($history, "competitor", array('placeholder' => 'Competitor', 'class'=>'input')); ?></td>
                <td><?php echo CHtml::activeTelField($history, "description_prospect", array('placeholder' => 'Descriptoin', 'class'=>'input')); ?></td>
                <td><?php echo CHtml::activeTelField($history, "next_plan", array('placeholder' => 'Next Plan', 'class'=>'input')); ?></td>
            </tr>
        </tbody>

    </table>

</div>
<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    <?php echo CHtml::resetButton('Reset', array('class'=>'white')); ?>
</div>

<?php $this->endWidget(); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.maskedinput.min.js',CClientScript::POS_END); ?>
<script type="text/javascript" src="js/alfamartPlugin.js"></script>

<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#prospect_id, #<?= CHtml::activeId($model, 'prospect_id') ?>, #<?= CHtml::activeId($model, 'mo_name') ?>").textMandatoryReadOnly();
        $("#<?= CHtml::activeId($model, 'company_name') ?>, #<?= CHtml::activeId($model, 'phone') ?>, #<?= CHtml::activeId($model, 'fax') ?>,#<?= CHtml::activeId($model, 'email') ?>,#<?=CHtml::activeId($model, 'status_prospect')?>,#<?=CHtml::activeId($model, 'type_prospect')?>,#<?=CHtml::activeId($model, 'unit_need')?>").textMandatoryFree();
        $("#uniform-<?= CHtml::activeId($history, 'status_prospect') ?>, #uniform-<?= CHtml::activeId($history, 'type_prospect') ?>,#<?= CHtml::activeId($history, 'unit_need') ?>").textMandatoryFree();
        
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