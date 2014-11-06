<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
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
		<?php echo $form->label($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'plate_number'); ?>
		<?php echo $form->textField($model,'plate_number',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->