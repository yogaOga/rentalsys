<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'no_cmd'); ?>
		<?php echo $form->textField($model,'no_cmd',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_pic'); ?>
		<?php echo $form->textField($model,'name_pic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'company_address_pic'); ?>
		<?php echo $form->textArea($model,'company_address_pic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'home_address_pic'); ?>
		<?php echo $form->textArea($model,'home_address_pic',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'city_pic'); ?>
		<?php echo $form->textField($model,'city_pic'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'npwp_pic'); ?>
		<?php echo $form->textField($model,'npwp_pic',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'payment_system_pic'); ?>
		<?php echo $form->textField($model,'payment_system_pic'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'payment_term_pic'); ?>
		<?php echo $form->textField($model,'payment_term_pic'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'average_gross_incorme_per_month'); ?>
		<?php echo $form->textField($model,'average_gross_incorme_per_month'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_bank'); ?>
		<?php echo $form->textField($model,'name_bank',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'address_bank'); ?>
		<?php echo $form->textArea($model,'address_bank',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_account_bank'); ?>
		<?php echo $form->textField($model,'no_account_bank',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_reference'); ?>
		<?php echo $form->textField($model,'name_reference',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'address_reference'); ?>
		<?php echo $form->textArea($model,'address_reference',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'phone_reference'); ?>
		<?php echo $form->textField($model,'phone_reference',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'vehicles_reference'); ?>
		<?php echo $form->textField($model,'vehicles_reference'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'title_cmd'); ?>
		<?php echo $form->textField($model,'title_cmd',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_cmd'); ?>
		<?php echo $form->textField($model,'name_cmd',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'address_cmd'); ?>
		<?php echo $form->textArea($model,'address_cmd',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'city_cmd'); ?>
		<?php echo $form->textField($model,'city_cmd'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'fax_cmd'); ?>
		<?php echo $form->textField($model,'fax_cmd',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'zip_code_cmd'); ?>
		<?php echo $form->textField($model,'zip_code_cmd'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'email_cmd'); ?>
		<?php echo $form->textField($model,'email_cmd',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'office_phone_cmd'); ?>
		<?php echo $form->textField($model,'office_phone_cmd',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'home_phone_cmd'); ?>
		<?php echo $form->textField($model,'home_phone_cmd',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'type_of_business'); ?>
		<?php echo $form->textField($model,'type_of_business'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'ownership'); ?>
		<?php echo $form->textField($model,'ownership'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'name_management'); ?>
		<?php echo $form->textField($model,'name_management',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'position_management'); ?>
		<?php echo $form->textField($model,'position_management'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'phone_management'); ?>
		<?php echo $form->textField($model,'phone_management',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'handphone_management'); ?>
		<?php echo $form->textField($model,'handphone_management',array('size'=>13,'maxlength'=>13)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_at'); ?>
		<?php echo $form->textField($model,'create_at'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->