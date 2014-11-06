<?php
/* @var $this MDivisiController */
/* @var $model MDivisi */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'divisi_id'); ?>
		<?php echo $form->textField($model,'divisi_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'divisi_kode'); ?>
		<?php echo $form->textField($model,'divisi_kode',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'divisi_name'); ?>
		<?php echo $form->textField($model,'divisi_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->