<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'applicant_no'); ?>
		<?php echo $form->textField($model,'applicant_no',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nickname'); ?>
		<?php echo $form->textField($model,'nickname',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'birth_place'); ?>
		<?php echo $form->textField($model,'birth_place',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'birth_date'); ?>
		<?php echo $form->textField($model,'birth_date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'blood_type'); ?>
		<?php echo $form->textField($model,'blood_type',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nationality'); ?>
		<?php echo $form->textField($model,'nationality',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'street_address'); ?>
		<?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'state_id'); ?>
		<?php echo $form->textField($model,'state_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'city_id'); ?>
		<?php echo $form->textField($model,'city_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'postal_code'); ?>
		<?php echo $form->textField($model,'postal_code',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'home_status'); ?>
		<?php echo $form->textField($model,'home_status',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'mobile'); ?>
		<?php echo $form->textField($model,'mobile',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'photo_path'); ?>
		<?php echo $form->textField($model,'photo_path',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'religion'); ?>
		<?php echo $form->textField($model,'religion',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'hobby'); ?>
		<?php echo $form->textArea($model,'hobby',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'driving_licence'); ?>
		<?php echo $form->textField($model,'driving_licence',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'marital_status'); ?>
		<?php echo $form->textField($model,'marital_status',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'children'); ?>
		<?php echo $form->textField($model,'children'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_person_name'); ?>
		<?php echo $form->textField($model,'emergency_person_name',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_relation'); ?>
		<?php echo $form->textField($model,'emergency_relation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_mobile'); ?>
		<?php echo $form->textField($model,'emergency_mobile',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_ext_reference'); ?>
		<?php echo $form->textField($model,'emergency_ext_reference',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_ext_address'); ?>
		<?php echo $form->textField($model,'emergency_ext_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_ext_phone'); ?>
		<?php echo $form->textField($model,'emergency_ext_phone',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_int_reference'); ?>
		<?php echo $form->textField($model,'emergency_int_reference',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_int_position'); ?>
		<?php echo $form->textField($model,'emergency_int_position',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'emergency_int_location'); ?>
		<?php echo $form->textField($model,'emergency_int_location',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'updated_at'); ?>
		<?php echo $form->textField($model,'updated_at'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'created_by'); ?>
		<?php echo $form->textField($model,'created_by'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->