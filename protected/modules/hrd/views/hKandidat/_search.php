<?php
/* @var $this HKandidatController */
/* @var $model HKandidat */
/* @var $form CActiveForm */
?>

<div class="content">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="input">
		<?php echo $form->label($model,'kandidat_id'); ?>
		<?php echo $form->textField($model,'kandidat_id'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kode_kandidat'); ?>
		<?php echo $form->textField($model,'kode_kandidat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nama_kandidat'); ?>
		<?php echo $form->textField($model,'nama_kandidat',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tempatlahir'); ?>
		<?php echo $form->textField($model,'tempatlahir',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tgllahir'); ?>
		<?php echo $form->textField($model,'tgllahir'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'agama'); ?>
		<?php echo $form->textField($model,'agama'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kelamin'); ?>
		<?php echo $form->textField($model,'kelamin',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'goldarah'); ?>
		<?php echo $form->textField($model,'goldarah',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kacamata'); ?>
		<?php echo $form->textField($model,'kacamata',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'plus'); ?>
		<?php echo $form->textField($model,'plus'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'minus'); ?>
		<?php echo $form->textField($model,'minus'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'cylindris'); ?>
		<?php echo $form->textField($model,'cylindris'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'statusnikah'); ?>
		<?php echo $form->textField($model,'statusnikah',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'propinsi'); ?>
		<?php echo $form->textField($model,'propinsi',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'kodepos'); ?>
		<?php echo $form->textField($model,'kodepos'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'telp'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'hp'); ?>
		<?php echo $form->textField($model,'hp',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'noktp'); ?>
		<?php echo $form->textField($model,'noktp',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tgldikeluarkan'); ?>
		<?php echo $form->textField($model,'tgldikeluarkan'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'berlakuktp'); ?>
		<?php echo $form->textField($model,'berlakuktp'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'nosim'); ?>
		<?php echo $form->textField($model,'nosim',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tgldikeluarkansim'); ?>
		<?php echo $form->textField($model,'tgldikeluarkansim'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'berlakusim'); ?>
		<?php echo $form->textField($model,'berlakusim'); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'userinput'); ?>
		<?php echo $form->textField($model,'userinput',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="input">
		<?php echo $form->label($model,'tglinput'); ?>
		<?php echo $form->textField($model,'tglinput'); ?>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->