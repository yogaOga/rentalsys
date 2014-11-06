<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mcar-rental-form',
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
		<?php echo $form->labelEx($model,'no_cmd'); ?>
		<?php echo $form->textField($model,'no_cmd',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_cmd'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'mobil_id'); ?>
		<?php echo $form->textField($model,'mobil_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'mobil_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'unit'); ?>
		<?php echo $form->textField($model,'unit',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'unit'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'klas_driver'); ?>
		<?php echo $form->textField($model,'klas_driver'); ?>
		<span class="error-message"><?php echo $form->error($model,'klas_driver'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'rental_rates'); ?>
		<?php echo $form->textField($model,'rental_rates'); ?>
		<span class="error-message"><?php echo $form->error($model,'rental_rates'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'contract_periode'); ?>
		<?php echo $form->textField($model,'contract_periode',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'contract_periode'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori
/*
    $(document).ready(function() {
        $("#id, #id,").mandatoryPlugin();
    });
*/
</script>


