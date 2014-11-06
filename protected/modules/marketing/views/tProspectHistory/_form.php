<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tprospect-history-form',
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
		<?php echo $form->labelEx($model,'history_id'); ?>
		<?php echo $form->textField($model,'history_id',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'history_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'prospect_id'); ?>
		<?php echo $form->textField($model,'prospect_id',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'prospect_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'status_prospect'); ?>
		<?php echo $form->textField($model,'status_prospect',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'status_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'type_prospect'); ?>
		<?php echo $form->textField($model,'type_prospect',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'type_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'unit_need'); ?>
		<?php echo $form->textField($model,'unit_need',array('size'=>60,'maxlength'=>255)); ?>
		<span class="error-message"><?php echo $form->error($model,'unit_need'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'competitor'); ?>
		<?php echo $form->textField($model,'competitor',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'competitor'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'description_prospect'); ?>
		<?php echo $form->textArea($model,'description_prospect',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'description_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'next_plan'); ?>
		<?php echo $form->textArea($model,'next_plan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'next_plan'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'create_at'); ?></span>
	</div>
	<div class="input">
		<?php echo $form->labelEx($model,'update_at'); ?>
		<?php echo $form->textField($model,'update_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'update_at'); ?></span>
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


