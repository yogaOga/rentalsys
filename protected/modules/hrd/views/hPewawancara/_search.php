<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */
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
		<?php echo $form->label($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kantor_id'); ?>
		<?php echo $form->textField($model,'kantor_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'departement_id'); ?>
		<?php echo $form->textField($model,'departement_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'seksi_id'); ?>
		<?php echo $form->textField($model,'seksi_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'divisi_id'); ?>
		<?php echo $form->textField($model,'divisi_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'jabatan_id'); ?>
		<?php echo $form->textField($model,'jabatan_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nmpewawancara'); ?>
		<?php echo $form->textField($model,'nmpewawancara',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->