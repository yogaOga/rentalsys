<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tvehicle-request-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if($form->errorSummary($model)){
            echo '<div class="notif error">' .$form->errorSummary($model).'</div>';
                } ?>
        
         

	<div class="input">
		<?php echo $form->labelEx($model,'No_Request'); ?>
		<?php echo $form->textField($model,'No_Request'); ?>
		<span class="error-message"><?php echo $form->error($model,'No_Request'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Request_Date'); ?>
		<?php echo $form->textField($model,'Request_Date'); ?>
		<span class="error-message"><?php echo $form->error($model,'Request_Date'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'PO_System'); ?>
		<?php echo $form->textField($model,'PO_System'); ?>
		<span class="error-message"><?php echo $form->error($model,'PO_System'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'PO_Custumer'); ?>
		<?php echo $form->textField($model,'PO_Custumer'); ?>
		<span class="error-message"><?php echo $form->error($model,'PO_Custumer'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Custumer_Name'); ?>
		<?php echo $form->textField($model,'Custumer_Name',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Custumer_Name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Address'); ?>
		<?php echo $form->textField($model,'Address',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Address'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Contact_Person'); ?>
		<?php echo $form->textField($model,'Contact_Person'); ?>
		<span class="error-message"><?php echo $form->error($model,'Contact_Person'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Rent_Period'); ?>
		<?php echo $form->textField($model,'Rent_Period'); ?>
		<span class="error-message"><?php echo $form->error($model,'Rent_Period'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Harga_Sewa'); ?>
		<?php echo $form->textField($model,'Harga_Sewa'); ?>
		<span class="error-message"><?php echo $form->error($model,'Harga_Sewa'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Marketing_Officer'); ?>
		<?php echo $form->textArea($model,'Marketing_Officer',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'Marketing_Officer'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Delivery_Date'); ?>
		<?php echo $form->textField($model,'Delivery_Date'); ?>
		<span class="error-message"><?php echo $form->error($model,'Delivery_Date'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Unit_merk_type_warna_keluaran'); ?>
		<?php echo $form->textField($model,'Unit_merk_type_warna_keluaran'); ?>
		<span class="error-message"><?php echo $form->error($model,'Unit_merk_type_warna_keluaran'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Tambahan_Interior'); ?>
		<?php echo $form->textArea($model,'Tambahan_Interior',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'Tambahan_Interior'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        $("#TVehicleRequest_No_Request, #TVehicleRequest_PO_System , #TVehicleRequest_PO_Custumer , #TVehicleRequest_Contact_Person , #TVehicleRequest_Marketing_Officer ,#TVehicleRequest_Delivery_Date").mandatoryPluginID();
		$("#TVehicleRequest_No_Request, #TVehicleRequest_PO_System , #TVehicleRequest_PO_Custumer").mandatoryPlugin();
    });
</script>


