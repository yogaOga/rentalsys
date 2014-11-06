<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hwarning-letter-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if($form->errorSummary($model)){
            echo '<div class="notif error"><a href="#" class="close">x</a>' .$form->errorSummary($model).'</div>';
                } ?>
        
         

	<div class="input">
		<?php echo $form->labelEx($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'employee_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'nip'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>60)); ?>
		<span class="error-message"><?php echo $form->error($model,'employee_name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'position'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'description'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'warning_type'); ?>
		<?php echo $form->textField($model,'warning_type',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'warning_type'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_at'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_by'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori
/*
    
    // jQueryPlugin for Field Text Mandatory Readonly
    $(document).ready(function() {
        $("#id, #id,").textMandatoryReadOnly();
    });
    
    // jQueryPlugin for Field Free Text mandatory
    $(document).ready(function() {
        $("#id, #id,").textMandatoryFree();
    });
    
    // jQueryPlugin for Field Text Readonly
    $(document).ready(function() {
        $("#id, #id,").textReadOnly();
    });
*/
</script>


