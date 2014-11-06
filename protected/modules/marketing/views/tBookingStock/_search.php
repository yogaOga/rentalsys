<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id_Booking_Stock'); ?>
		<?php echo $form->textField($model,'id_Booking_Stock'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Booking'); ?>
		<?php echo $form->textField($model,'Booking'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Booking_Date'); ?>
		<?php echo $form->textField($model,'Booking_Date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'PO_System'); ?>
		<?php echo $form->textField($model,'PO_System'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'PO_Custumer'); ?>
		<?php echo $form->textField($model,'PO_Custumer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Custumer_Name'); ?>
		<?php echo $form->textField($model,'Custumer_Name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Contact_Person'); ?>
		<?php echo $form->textField($model,'Contact_Person'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'period_rent'); ?>
		<?php echo $form->textField($model,'period_rent'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Marketing_Officer'); ?>
		<?php echo $form->textField($model,'Marketing_Officer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Delivery_Date'); ?>
		<?php echo $form->textField($model,'Delivery_Date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Unit'); ?>
		<?php echo $form->textField($model,'Unit'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Nomor_Polisi_KBM_Stock_Pool'); ?>
		<?php echo $form->textField($model,'Nomor_Polisi_KBM_Stock_Pool',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->