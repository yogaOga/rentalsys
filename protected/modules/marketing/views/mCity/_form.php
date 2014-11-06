<?php
/* @var $this MCityController */
/* @var $model MCity */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mcity-form',
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
		<?php echo $form->labelEx($model,'regional_id'); ?>
		<?php echo $form->textField($model,'regional_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'regional_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'name_city'); ?>
		<?php echo $form->textField($model,'name_city',array('size'=>11,'maxlength'=>11)); ?>
		<span class="error-message"><?php echo $form->error($model,'name_city'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
		<span class="error-message"><?php echo $form->error($model,'create_user'); ?></span>
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


