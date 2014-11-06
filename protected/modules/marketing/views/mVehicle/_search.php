<?php
/* @var $this MVehicleController */
/* @var $model MVehicle */
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
		<?php echo $form->label($model,'name_vehicle'); ?>
		<?php echo $form->textField($model,'name_vehicle',array('size'=>60,'maxlength'=>100)); ?>
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