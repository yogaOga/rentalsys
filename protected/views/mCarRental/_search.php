<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */
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
		<?php echo $form->label($model,'no_cmd'); ?>
		<?php echo $form->textField($model,'no_cmd',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'mobil_id'); ?>
		<?php echo $form->textField($model,'mobil_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'klas_driver'); ?>
		<?php echo $form->textField($model,'klas_driver'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'rental_rates'); ?>
		<?php echo $form->textField($model,'rental_rates'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'contract_periode'); ?>
		<?php echo $form->textField($model,'contract_periode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->