<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */
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
		<?php echo $form->label($model,'history_id'); ?>
		<?php echo $form->textField($model,'history_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'prospect_id'); ?>
		<?php echo $form->textField($model,'prospect_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'status_prospect'); ?>
		<?php echo $form->textField($model,'status_prospect',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'type_prospect'); ?>
		<?php echo $form->textField($model,'type_prospect',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'unit_need'); ?>
		<?php echo $form->textField($model,'unit_need',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'competitor'); ?>
		<?php echo $form->textField($model,'competitor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'description_prospect'); ?>
		<?php echo $form->textArea($model,'description_prospect',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'next_plan'); ?>
		<?php echo $form->textArea($model,'next_plan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'date_prospect'); ?>
		<?php echo $form->textField($model,'date_prospect'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->