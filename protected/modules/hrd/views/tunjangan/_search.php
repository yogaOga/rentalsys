<?php
/* @var $this TunjanganController */
/* @var $model Tunjangan */
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
		<?php echo $form->label($model,'tglawal'); ?>
		<?php echo $form->textField($model,'tglawal'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tglakhir'); ?>
		<?php echo $form->textField($model,'tglakhir'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nmtunjangan'); ?>
		<?php echo $form->textField($model,'nmtunjangan'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nilai'); ?>
		<?php echo $form->textField($model,'nilai'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->