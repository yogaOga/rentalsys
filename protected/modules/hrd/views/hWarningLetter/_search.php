<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'employee_id'); ?>
		<?php echo $form->textField($model,'employee_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'employee_name'); ?>
		<?php echo $form->textField($model,'employee_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'position'); ?>
		<?php echo $form->textField($model,'position',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'warning_type'); ?>
		<?php echo $form->textField($model,'warning_type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->