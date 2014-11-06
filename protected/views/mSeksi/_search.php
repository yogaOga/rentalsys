<?php
/* @var $this MSeksiController */
/* @var $model MSeksi */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'seksi_id'); ?>
		<?php echo $form->textField($model,'seksi_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'seksi_kode'); ?>
		<?php echo $form->textField($model,'seksi_kode',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'seksi_name'); ?>
		<?php echo $form->textField($model,'seksi_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->