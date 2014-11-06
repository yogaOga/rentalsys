<?php
/* @var $this TBookingKendaraanController */
/* @var $model TBookingKendaraan */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id_Booking_Kendaraan'); ?>
		<?php echo $form->textField($model,'id_Booking_Kendaraan'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Booking'); ?>
		<?php echo $form->textField($model,'No_Booking'); ?>
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
		<?php echo $form->label($model,'Customer_Name'); ?>
		<?php echo $form->textField($model,'Customer_Name',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'ID_Custumer'); ?>
		<?php echo $form->textField($model,'ID_Custumer'); ?>
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
		<?php echo $form->label($model,'Rent_Period'); ?>
		<?php echo $form->textField($model,'Rent_Period'); ?>
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
		<?php echo $form->label($model,'Nomor_Polisi_KBM_GS'); ?>
		<?php echo $form->textField($model,'Nomor_Polisi_KBM_GS',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Jangka_Waktu_GS'); ?>
		<?php echo $form->textField($model,'Jangka_Waktu_GS'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Alasan_dilakukan_GS'); ?>
		<?php echo $form->textField($model,'Alasan_dilakukan_GS',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->