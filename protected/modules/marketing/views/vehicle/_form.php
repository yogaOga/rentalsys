<?php
/* @var $this VehicleController */
/* @var $model Vehicle */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-form',
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
		<?php echo $form->labelEx($model,'merk'); ?>
		<?php echo $form->textField($model,'merk',array('size'=>60,'maxlength'=>255)); ?>
		<span class="error-message"><?php echo $form->error($model,'merk'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<span class="error-message"><?php echo $form->error($model,'year'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>60,'maxlength'=>255)); ?>
		<span class="error-message"><?php echo $form->error($model,'color'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'plate_number'); ?>
		<?php echo $form->textField($model,'plate_number',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'plate_number'); ?></span>
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


