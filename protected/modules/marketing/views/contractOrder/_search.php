<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'id_Contract_Order'); ?>
		<?php echo $form->textField($model,'id_Contract_Order'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'MarketingID'); ?>
		<?php echo $form->textField($model,'MarketingID'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Penawaran'); ?>
		<?php echo $form->textField($model,'No_Penawaran'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Id_Customer'); ?>
		<?php echo $form->textField($model,'Id_Customer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Nama_Customer'); ?>
		<?php echo $form->textField($model,'Nama_Customer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Telp'); ?>
		<?php echo $form->textField($model,'No_Telp'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Contact_Person'); ?>
		<?php echo $form->textField($model,'Contact_Person'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Marketing_Name'); ?>
		<?php echo $form->textField($model,'Marketing_Name'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'ID_Prospek'); ?>
		<?php echo $form->textField($model,'ID_Prospek'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Alamat_Prospek'); ?>
		<?php echo $form->textField($model,'Alamat_Prospek',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Fax'); ?>
		<?php echo $form->textField($model,'No_Fax'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_Hp'); ?>
		<?php echo $form->textField($model,'No_Hp'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'No_PO_System'); ?>
		<?php echo $form->textField($model,'No_PO_System'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Rent_Period'); ?>
		<?php echo $form->textField($model,'Rent_Period'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Delivery_Date'); ?>
		<?php echo $form->textField($model,'Delivery_Date'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'Type_Contract_Order'); ?>
		<?php echo $form->textField($model,'Type_Contract_Order',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->