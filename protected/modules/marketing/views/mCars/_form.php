<?php
/* @var $this MCarsController */
/* @var $model MCars */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mcars-form',
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
		<?php echo $form->labelEx($model,'vehicle_id'); ?>
		<?php echo $form->textField($model,'vehicle_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'vehicle_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'model_id'); ?>
		<?php echo $form->textField($model,'model_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'model_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'type_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'color_id'); ?>
		<?php echo $form->textField($model,'color_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'color_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_police'); ?>
		<?php echo $form->textField($model,'no_police',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_police'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_chasis'); ?>
		<?php echo $form->textField($model,'no_chasis',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_chasis'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_machine'); ?>
		<?php echo $form->textField($model,'no_machine',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_machine'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_stnk'); ?>
		<?php echo $form->textField($model,'no_stnk',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_stnk'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'fuel_id'); ?>
		<?php echo $form->textField($model,'fuel_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'fuel_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kilometer'); ?>
		<?php echo $form->textField($model,'kilometer'); ?>
		<span class="error-message"><?php echo $form->error($model,'kilometer'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_bpkb'); ?>
		<?php echo $form->textField($model,'no_bpkb',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_bpkb'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'year_of_manufacture'); ?>
		<?php echo $form->textField($model,'year_of_manufacture'); ?>
		<span class="error-message"><?php echo $form->error($model,'year_of_manufacture'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_factory'); ?>
		<?php echo $form->textField($model,'no_factory',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_factory'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'date_of_purchase'); ?>
		<?php echo $form->textField($model,'date_of_purchase'); ?>
		<span class="error-message"><?php echo $form->error($model,'date_of_purchase'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'purchase_price'); ?>
		<?php echo $form->textField($model,'purchase_price'); ?>
		<span class="error-message"><?php echo $form->error($model,'purchase_price'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'valid_stnk'); ?>
		<?php echo $form->textField($model,'valid_stnk'); ?>
		<span class="error-message"><?php echo $form->error($model,'valid_stnk'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'expired_insurance'); ?>
		<?php echo $form->textField($model,'expired_insurance'); ?>
		<span class="error-message"><?php echo $form->error($model,'expired_insurance'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'no_polis_insurance'); ?>
		<?php echo $form->textField($model,'no_polis_insurance',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'no_polis_insurance'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'state_car'); ?>
		<?php echo $form->textField($model,'state_car',array('size'=>30,'maxlength'=>30)); ?>
		<span class="error-message"><?php echo $form->error($model,'state_car'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'transmission'); ?>
		<?php echo $form->textField($model,'transmission',array('size'=>10,'maxlength'=>10)); ?>
		<span class="error-message"><?php echo $form->error($model,'transmission'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'cylinder'); ?>
		<?php echo $form->textField($model,'cylinder'); ?>
		<span class="error-message"><?php echo $form->error($model,'cylinder'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'stnk_address'); ?>
		<?php echo $form->textArea($model,'stnk_address',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'stnk_address'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
		<span class="error-message"><?php echo $form->error($model,'create_user'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<span class="error-message"><?php echo $form->error($model,'create_date'); ?></span>
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


