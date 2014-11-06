<?php
/* @var $this MDepartmentController */
/* @var $model MDepartment */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'department_code'); ?>
		<?php echo $form->textField($model,'department_code',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'department_name'); ?>
		<?php echo $form->textField($model,'department_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->