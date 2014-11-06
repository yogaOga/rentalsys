<?php
/* @var $this MRecruitmentController */
/* @var $model MRecruitment */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'year_recruitment'); ?>
		<?php echo $form->textField($model,'year_recruitment',array('size'=>4,'maxlength'=>4)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'office'); ?>
		<?php echo $form->textField($model,'office'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'departemen'); ?>
		<?php echo $form->textField($model,'departemen'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'seksi'); ?>
		<?php echo $form->textField($model,'seksi'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'divisi'); ?>
		<?php echo $form->textField($model,'divisi'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'occuption'); ?>
		<?php echo $form->textField($model,'occuption'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'type_selection'); ?>
		<?php echo $form->textField($model,'type_selection',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'media_promotion'); ?>
		<?php echo $form->textField($model,'media_promotion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->