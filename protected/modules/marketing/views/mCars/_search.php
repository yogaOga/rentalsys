<?php
/* @var $this MCarsController */
/* @var $model MCars */
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
		<?php echo $form->label($model,'vehicle_id'); ?>
		<?php echo $form->textField($model,'vehicle_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'model_id'); ?>
		<?php echo $form->textField($model,'model_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'type_id'); ?>
		<?php echo $form->textField($model,'type_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'color_id'); ?>
		<?php echo $form->textField($model,'color_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_police'); ?>
		<?php echo $form->textField($model,'no_police',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_chasis'); ?>
		<?php echo $form->textField($model,'no_chasis',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_machine'); ?>
		<?php echo $form->textField($model,'no_machine',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_stnk'); ?>
		<?php echo $form->textField($model,'no_stnk',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'fuel_id'); ?>
		<?php echo $form->textField($model,'fuel_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kilometer'); ?>
		<?php echo $form->textField($model,'kilometer'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_bpkb'); ?>
		<?php echo $form->textField($model,'no_bpkb',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'year_of_manufacture'); ?>
		<?php echo $form->textField($model,'year_of_manufacture'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_factory'); ?>
		<?php echo $form->textField($model,'no_factory',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'date_of_purchase'); ?>
		<?php echo $form->textField($model,'date_of_purchase'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'purchase_price'); ?>
		<?php echo $form->textField($model,'purchase_price'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'valid_stnk'); ?>
		<?php echo $form->textField($model,'valid_stnk'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'expired_insurance'); ?>
		<?php echo $form->textField($model,'expired_insurance'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'no_polis_insurance'); ?>
		<?php echo $form->textField($model,'no_polis_insurance',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'state_car'); ?>
		<?php echo $form->textField($model,'state_car',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'transmission'); ?>
		<?php echo $form->textField($model,'transmission',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'cylinder'); ?>
		<?php echo $form->textField($model,'cylinder'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'stnk_address'); ?>
		<?php echo $form->textArea($model,'stnk_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'create_user'); ?>
		<?php echo $form->textField($model,'create_user'); ?>
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