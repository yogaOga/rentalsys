<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hpewawancara-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if($form->errorSummary($model)){
            echo '<div class="notif error"><a href="#" class="close">x</a>' .$form->errorSummary($model).'</div>';
                } ?>
        
         

	<div class="input">
		<?php echo $form->labelEx($model,'recruitment_id'); ?>
		<?php echo $form->textField($model,'recruitment_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'recruitment_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kantor_id'); ?>
		<?php echo $form->textField($model,'kantor_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'kantor_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'departement_id'); ?>
		<?php echo $form->textField($model,'departement_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'departement_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'seksi_id'); ?>
		<?php echo $form->textField($model,'seksi_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'seksi_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'divisi_id'); ?>
		<?php echo $form->textField($model,'divisi_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'divisi_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'jabatan_id'); ?>
		<?php echo $form->textField($model,'jabatan_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'jabatan_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nmpewawancara'); ?>
		<?php echo $form->textField($model,'nmpewawancara',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'nmpewawancara'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'catatan'); ?></span>
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


