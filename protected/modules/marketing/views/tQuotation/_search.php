<?php
/* @var $this TQuotationController */
/* @var $model TQuotation */
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
		<?php echo $form->label($model,'marketing_id'); ?>
		<?php echo $form->textField($model,'marketing_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'customer_id'); ?>
		<?php echo $form->textField($model,'customer_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'contact_person'); ?>
		<?php echo $form->textField($model,'contact_person',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_of_employer'); ?>
		<?php echo $form->textField($model,'name_of_employer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'include_driver'); ?>
		<?php echo $form->textField($model,'include_driver'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'include_ppn'); ?>
		<?php echo $form->textField($model,'include_ppn'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'handphone_customer'); ?>
		<?php echo $form->textField($model,'handphone_customer',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'office_boss'); ?>
		<?php echo $form->textField($model,'office_boss',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'hanphone'); ?>
		<?php echo $form->textField($model,'hanphone',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->