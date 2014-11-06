<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id_Vehicle_Request'); ?>
		<?php echo $form->textField($model,'id_Vehicle_Request'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Request'); ?>
		<?php echo $form->textField($model,'No_Request'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Request_Date'); ?>
		<?php echo $form->textField($model,'Request_Date'); ?>
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
		<?php echo $form->label($model,'Rent_Period'); ?>
		<?php echo $form->textField($model,'Rent_Period'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Harga_Sewa'); ?>
		<?php echo $form->textField($model,'Harga_Sewa'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Marketing_Officer'); ?>
		<?php echo $form->textArea($model,'Marketing_Officer',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Delivery_Date'); ?>
		<?php echo $form->textField($model,'Delivery_Date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Unit_merk_type_warna_keluaran'); ?>
		<?php echo $form->textField($model,'Unit_merk_type_warna_keluaran'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Tambahan_Interior'); ?>
		<?php echo $form->textArea($model,'Tambahan_Interior',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->