<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mcomplain-existing-customer-form',
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
?>



<div class="input">
    <?php echo $form->labelEx($model, 'periode'); ?>
    <?php //echo $form->textField($model, 'periode', array('size' => 50, 'maxlength' => 50)); ?>
    <?php echo $form->dropDownList($model, 'periode', array('January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December'), array('empty' => '-select-')); ?>

    <span class="error-message"><?php echo $form->error($model, 'periode'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'branch'); ?>
    <?php // echo $form->textField($model, 'branch'); ?>
    <?php echo $form->dropDownList($model, 'branch', CHtml::listData(LBranch::model()->findAll(), 'id', 'branch_name'), array('empty' => '-select-')); ?>

    <span class="error-message"><?php echo $form->error($model, 'branch'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'marketing_officer'); ?>
    <?php echo $form->textField($model, 'marketing_officer'); ?>
    <span class="error-message"><?php echo $form->error($model, 'marketing_officer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'customer'); ?>
    <?php echo $form->textField($model, 'customer', array('size' => 60, 'maxlength' => 100)); ?>
    <span class="error-message"><?php echo $form->error($model, 'customer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'complain_date'); ?>
    <?php echo $form->textField($model, 'complain_date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'complain_date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'complain'); ?>
    <?php echo $form->textArea($model, 'complain', array('rows' => 6, 'cols' => 10)); ?>

    <span class="error-message"><?php echo $form->error($model, 'complain'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'complainer_name'); ?>
    <?php echo $form->textField($model, 'complainer_name', array('size' => 60, 'maxlength' => 100)); ?>
    <span class="error-message"><?php echo $form->error($model, 'complainer_name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'follow_up_date'); ?>
    <?php echo $form->textField($model, 'follow_up_date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'follow_up_date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'follow_up_description'); ?>
    <?php echo $form->textArea($model, 'follow_up_description', array('rows' => 6, 'cols' => 10)); ?>
    <span class="error-message"><?php echo $form->error($model, 'follow_up_description'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'pic'); ?>
    <?php echo $form->textField($model, 'pic', array('size' => 60, 'maxlength' => 100)); ?>
    <span class="error-message"><?php echo $form->error($model, 'pic'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'remarks'); ?>
    <?php echo $form->textField($model, 'remarks', array('size' => 60, 'maxlength' => 255)); ?>
    <span class="error-message"><?php echo $form->error($model, 'remarks'); ?></span>
</div>



<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#MComplainExistingCustomer_customer,#MComplainExistingCustomer_complain_date, #MComplainExistingCustomer_complainer_name, #MComplainExistingCustomer_follow_up_date").mandatoryPluginID();
        $("#MComplainExistingCustomer_customer,#MComplainExistingCustomer_complain_date, #MComplainExistingCustomer_complainer_name, #MComplainExistingCustomer_follow_up_date").mandatoryPlugin();
        $("#MComplainExistingCustomer_complain_date").datepicker({dateFormat: "yy-mm-dd"});
        $("#MComplainExistingCustomer_follow_up_date").datepicker({dateFormat: "yy-mm-dd"});
    });




</script>


