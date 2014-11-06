<?php
/* @var $this MSeksiController */
/* @var $model MSeksi */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mseksi-form',
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
		<?php echo $form->labelEx($model,'seksi_kode'); ?>
		<?php echo $form->textField($model,'seksi_kode',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'seksi_kode'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'seksi_name'); ?>
		<?php echo $form->textField($model,'seksi_name',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'seksi_name'); ?></span>
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


