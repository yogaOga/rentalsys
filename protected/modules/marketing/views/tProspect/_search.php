<?php
/* @var $this TProspectController */
/* @var $model TProspect */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'prospect_id'); ?>
		<?php echo $form->textField($model,'prospect_id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'marketing_id'); ?>
		<?php echo $form->textField($model,'marketing_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'company_name'); ?>
		<?php echo $form->textField($model,'company_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'company_title'); ?>
		<?php echo $form->textField($model,'company_title',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'company_address'); ?>
		<?php echo $form->textArea($model,'company_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'l_business_type'); ?>
		<?php echo $form->textField($model,'l_business_type'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'l_ownership'); ?>
		<?php echo $form->textField($model,'l_ownership'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'occuption'); ?>
		<?php echo $form->textField($model,'occuption',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'mobile_phone'); ?>
		<?php echo $form->textField($model,'mobile_phone'); ?>
	</div>

	

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->