<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */
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
		<?php echo $form->label($model,'mo_id'); ?>
		<?php echo $form->textField($model,'mo_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'mo_name'); ?>
		<?php echo $form->textField($model,'mo_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_user'); ?>
		<?php echo $form->textField($model,'created_user'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->