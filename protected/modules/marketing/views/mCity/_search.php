<?php
/* @var $this MCityController */
/* @var $model MCity */
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
		<?php echo $form->label($model,'regional_id'); ?>
		<?php echo $form->textField($model,'regional_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_city'); ?>
		<?php echo $form->textField($model,'name_city',array('size'=>11,'maxlength'=>11)); ?>
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