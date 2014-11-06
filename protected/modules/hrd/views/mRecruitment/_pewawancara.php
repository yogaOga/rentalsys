<?php
/* @var $this HPewawancaraController */
/* @var $modelPW HPewawancara */
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

	<?php if($form->errorSummary($modelPW)){
            echo '<div class="notif error"><a href="#" class="close">x</a>' .$form->errorSummary($modelPW).'</div>';
                } ?>
        
         

	<div class="input">
		<?php echo $form->labelEx($modelPW,'recruitment_id'); ?>
		<?php echo $form->textField($modelPW,'recruitment_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'recruitment_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'kantor_id'); ?>
		<?php echo $form->textField($modelPW,'kantor_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'kantor_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'departement_id'); ?>
		<?php echo $form->textField($modelPW,'departement_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'departement_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'seksi_id'); ?>
		<?php echo $form->textField($modelPW,'seksi_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'seksi_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'divisi_id'); ?>
		<?php echo $form->textField($modelPW,'divisi_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'divisi_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'jabatan_id'); ?>
		<?php echo $form->textField($modelPW,'jabatan_id'); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'jabatan_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'nmpewawancara'); ?>
		<?php echo $form->textField($modelPW,'nmpewawancara',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'nmpewawancara'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelPW,'catatan'); ?>
		<?php echo $form->textArea($modelPW,'catatan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modelPW,'catatan'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($modelPW->isNewRecord ? 'Create' : 'Save'); ?>
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


