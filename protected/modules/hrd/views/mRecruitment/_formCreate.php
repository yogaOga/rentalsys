<?php
/* @var $this MRecruitmentController */
/* @var $model MRecruitment */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mrecruitment-form',
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
		<?php echo $form->labelEx($model,'year_recruitment'); ?>
		<?php // echo $form->textField($model,'year_recruitment',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->dropDownList($model,'year_recruitment',Params::getYearList(),array('empty'=>'- Select')) ?>
		<span class="error-message"><?php echo $form->error($model,'year_recruitment'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100,'placeholder'=>'NAME')); ?>
		<span class="error-message"><?php echo $form->error($model,'name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'office'); ?>
		<?php echo $form->textField($model,'office'); ?>
		<span class="error-message"><?php echo $form->error($model,'office'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'departemen'); ?>
		<?php echo $form->dropDownList($model,'departemen',Params::getDepartement(),array('empty'=>'- Select')) ?>
		<span class="error-message"><?php echo $form->error($model,'departemen'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'seksi'); ?>
		<?php echo $form->dropDownList($model,'seksi',Params::getSeksi(),array('empty'=>'- Select')) ?>
		<span class="error-message"><?php echo $form->error($model,'seksi'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'divisi'); ?>
		<?php echo $form->dropDownList($model,'divisi',Params::getDepartement(),array('empty'=>'- Select')) ?>
		<span class="error-message"><?php echo $form->error($model,'divisi'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'occuption'); ?>
		<?php echo $form->dropDownList($model,'departemen',Params::getDepartement(),array('empty'=>'- Select')) ?>
		<span class="error-message"><?php echo $form->error($model,'occuption'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'type_selection'); ?>
		<?php echo $form->textField($model,'type_selection',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'type_selection'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'media_promotion'); ?>
		<?php // echo $form->textField($model,'media_promotion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo CHtml::radioButtonList('media_promotion',$model->media_promotion,array('Tidak Ada'=>'Tidak Ada', 'Ada'=>'Ada')); ?>
		<span class="error-message"><?php echo $form->error($model,'media_promotion'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textArea($model,'note',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'note'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    
    // jQueryPlugin for Field Text Mandatory Readonly
    $(document).ready(function() {
        $("#id, #id,").textMandatoryReadOnly();
    });
    
    // jQueryPlugin for Field Free Text mandatory
    $(document).ready(function() {
        $("#MRecruitment_year_recruitment, #uniform-MRecruitment_year_recruitment,#MRecruitment_name").textMandatoryFree();
    });
    
    // jQueryPlugin for Field Text Readonly
    $(document).ready(function() {
        $("#id, #id,").textReadOnly();
    });

</script>


