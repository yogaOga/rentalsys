<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mmarketing-officer-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>

	<div class="input">
		<?php echo $form->labelEx($model,'mo_id'); ?>
		<?php echo $form->textField($model,'mo_id',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'mo_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'mo_name'); ?>
		<?php echo $form->textField($model,'mo_name',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'mo_name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_at'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_user'); ?>
		<?php echo $form->textField($model,'created_user'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_user'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>
