<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */
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
		<?php echo $form->label($model,'marketing_id'); ?>
		<?php echo $form->textField($model,'marketing_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tender_no'); ?>
		<?php echo $form->textField($model,'tender_no',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'customer_name'); ?>
		<?php echo $form->textField($model,'customer_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'contact_person'); ?>
		<?php echo $form->textField($model,'contact_person',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'marketing_name'); ?>
		<?php echo $form->textField($model,'marketing_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'prospect_id'); ?>
		<?php echo $form->textField($model,'prospect_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'prospect_address'); ?>
		<?php echo $form->textField($model,'prospect_address',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'handphone'); ?>
		<?php echo $form->textField($model,'handphone',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'po_system_no'); ?>
		<?php echo $form->textField($model,'po_system_no',array('size'=>16,'maxlength'=>16)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'period_rent'); ?>
		<?php echo $form->textField($model,'period_rent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'po_customer_no'); ?>
		<?php echo $form->textField($model,'po_customer_no'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'delivery_date'); ?>
		<?php echo $form->textField($model,'delivery_date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'vehicle_id'); ?>
		<?php echo $form->textField($model,'vehicle_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'unit_requirement'); ?>
		<?php echo $form->textField($model,'unit_requirement'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'accesories'); ?>
		<?php echo $form->textField($model,'accesories'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'rate'); ?>
		<?php echo $form->textField($model,'rate'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'contract_period'); ?>
		<?php echo $form->textField($model,'contract_period'); ?>
	</div>
<!--
	<div class="input">
		<?php// echo $form->label($model,'approved'); ?>
		<?php// echo $form->textField($model,'approved'); ?>
	</div>

	<div class="input">
		<?php //echo $form->label($model,'created_date'); ?>
		<?php //echo $form->textField($model,'created_date'); ?>
	</div>

	<div class="input">
		<?php //echo $form->label($model,'created_user'); ?>
		<?php //echo $form->textField($model,'created_user'); ?>
	</div>

	<div class="input">
		<?php //echo $form->label($model,'updated_user'); ?>
		<?php //echo $form->textField($model,'updated_user'); ?>
	</div>

	<div class="input">
		<?php //echo $form->label($model,'updated_date'); ?>
		<?php //echo $form->textField($model,'updated_date'); ?>
	</div>-->

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->