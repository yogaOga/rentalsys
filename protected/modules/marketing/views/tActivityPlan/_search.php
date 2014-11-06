<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */
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
		<?php echo $form->label($model,'id_marketing'); ?>
		<?php echo $form->textField($model,'id_marketing'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'start_date'); ?>
		<?php echo $form->textField($model,'start_date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'working_duration'); ?>
		<?php echo $form->textField($model,'working_duration'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'scale_of_priority_id'); ?>
		<?php echo $form->textField($model,'scale_of_priority_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'estimation_of_result'); ?>
		<?php echo $form->textField($model,'estimation_of_result',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'final_result_id'); ?>
		<?php echo $form->textField($model,'final_result_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'note_of_manager'); ?>
		<?php echo $form->textField($model,'note_of_manager',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_user'); ?>
		<?php echo $form->textField($model,'created_user'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_date'); ?>
		<?php echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'update_user'); ?>
		<?php echo $form->textField($model,'update_user'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->