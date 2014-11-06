<?php
/* @var $this MKaryawanController */
/* @var $model MKaryawan */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mkaryawan-form',
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
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textArea($model,'address',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'address'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>13,'maxlength'=>13)); ?>
		<span class="error-message"><?php echo $form->error($model,'phone'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'email'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori
/*
    
    // jQueryPlugin for Field Text Mandatory Readonly
    $(document).ready(function() {
        $("#id, #id,").textMandatoryReadOnly();
    });
    
    // jQueryPlugin for Field Free Text mandatory
    $(document).ready(function() {
        $("#id, #id,").textMandatoryFree();
    });
    
    // jQueryPlugin for Field Text Readonly
    $(document).ready(function() {
        $("#id, #id,").textReadOnly();
    });
*/
</script>


