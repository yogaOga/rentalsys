<?php
/* @var $this MEmployeeController */
/* @var $model MEmployee */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'memployee-form',
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
		<?php echo $form->labelEx($model,'applicant_id'); ?>
		<?php echo $form->textField($model,'applicant_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'applicant_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nip'); ?>
		<?php echo $form->textField($model,'nip',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'nip'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>60)); ?>
		<span class="error-message"><?php echo $form->error($model,'first_name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'last_name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'nickname'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'birth_place'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
		<span class="error-message"><?php echo $form->error($model,'birth_date'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($model,'gender'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'blood_type'); ?>
		<?php echo $form->textField($model,'blood_type',array('size'=>3,'maxlength'=>3)); ?>
		<span class="error-message"><?php echo $form->error($model,'blood_type'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>5,'maxlength'=>5)); ?>
		<span class="error-message"><?php echo $form->error($model,'nationality'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'street_address'); ?>
		<?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>200)); ?>
		<span class="error-message"><?php echo $form->error($model,'street_address'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'state_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
		<span class="error-message"><?php echo $form->error($model,'city_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'home_status'); ?>
		<?php echo $form->textField($model,'home_status',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'home_status'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'phone'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'mobile'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'photo_path'); ?>
		<?php echo $form->textField($model,'photo_path',array('size'=>60,'maxlength'=>255)); ?>
		<span class="error-message"><?php echo $form->error($model,'photo_path'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
		<span class="error-message"><?php echo $form->error($model,'email'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($model,'religion'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'hobby'); ?>
		<?php echo $form->textArea($model,'hobby',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'hobby'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'driving_licence'); ?>
		<?php echo $form->textField($model,'driving_licence',array('size'=>3,'maxlength'=>3)); ?>
		<span class="error-message"><?php echo $form->error($model,'driving_licence'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'marital_status'); ?>
		<?php echo $form->textField($model,'marital_status',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'marital_status'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'children'); ?>
		<?php echo $form->textField($model,'children'); ?>
		<span class="error-message"><?php echo $form->error($model,'children'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_person_name'); ?>
		<?php echo $form->textField($model,'emergency_person_name',array('size'=>60,'maxlength'=>60)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_person_name'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_relation'); ?>
		<?php echo $form->textField($model,'emergency_relation',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_relation'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_mobile'); ?>
		<?php echo $form->textField($model,'emergency_mobile',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_mobile'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_ext_reference'); ?>
		<?php echo $form->textField($model,'emergency_ext_reference',array('size'=>60,'maxlength'=>60)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_ext_reference'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_ext_address'); ?>
		<?php echo $form->textField($model,'emergency_ext_address',array('size'=>60,'maxlength'=>255)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_ext_address'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_ext_phone'); ?>
		<?php echo $form->textField($model,'emergency_ext_phone',array('size'=>25,'maxlength'=>25)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_ext_phone'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_int_reference'); ?>
		<?php echo $form->textField($model,'emergency_int_reference',array('size'=>60,'maxlength'=>60)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_int_reference'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_int_position'); ?>
		<?php echo $form->textField($model,'emergency_int_position',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_int_position'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'emergency_int_location'); ?>
		<?php echo $form->textField($model,'emergency_int_location',array('size'=>45,'maxlength'=>45)); ?>
		<span class="error-message"><?php echo $form->error($model,'emergency_int_location'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_at'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
		<span class="error-message"><?php echo $form->error($model,'created_by'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
		<span class="error-message"><?php echo $form->error($model,'updated_at'); ?></span>
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


