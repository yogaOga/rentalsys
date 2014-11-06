<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id_marketing_plan'); ?>
		<?php echo $form->textField($model,'id_marketing_plan'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Nama_Marketing'); ?>
		<?php echo $form->textField($model,'Nama_Marketing',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Marketing_Items'); ?>
		<?php echo $form->textField($model,'Marketing_Items',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Start_End_Date'); ?>
		<?php echo $form->textField($model,'Start_End_Date',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Durasi_Pekerjaan'); ?>
		<?php echo $form->textField($model,'Durasi_Pekerjaan',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Skala_Prioritas'); ?>
		<?php echo $form->textField($model,'Skala_Prioritas',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Estimasi_Hasil'); ?>
		<?php echo $form->textField($model,'Estimasi_Hasil',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Result_Final'); ?>
		<?php echo $form->textField($model,'Result_Final',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Note_Manager'); ?>
		<?php echo $form->textField($model,'Note_Manager',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->