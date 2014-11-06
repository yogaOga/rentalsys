<?php
/* @var $this MDriversController */
/* @var $model MDrivers */
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
		<?php echo $form->label($model,'no_driver'); ?>
		<?php echo $form->textField($model,'no_driver',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'driver_name'); ?>
		<?php echo $form->textField($model,'driver_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->