<?php
/* @var $this HKandidatController */
/* @var $model HKandidat */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hkandidat-form',
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
		<?php echo $form->labelEx($model,'kode_kandidat'); ?>
		<?php echo $form->textField($model,'kode_kandidat',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'kode_kandidat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nama_kandidat'); ?>
		<?php echo $form->textField($model,'nama_kandidat',array('size'=>60,'maxlength'=>200)); ?>
		<span class="error-message"><?php echo $form->error($model,'nama_kandidat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'tempatlahir'); ?>
		<?php echo $form->textField($model,'tempatlahir',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'tempatlahir'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'tgllahir'); ?>
		<?php echo $form->textField($model,'tgllahir'); ?>
		<span class="error-message"><?php echo $form->error($model,'tgllahir'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'agama'); ?>
		<?php echo $form->textField($model,'agama'); ?>
		<span class="error-message"><?php echo $form->error($model,'agama'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kelamin'); ?>
		<?php echo $form->textField($model,'kelamin',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'kelamin'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'goldarah'); ?>
		<?php echo $form->textField($model,'goldarah',array('size'=>5,'maxlength'=>5)); ?>
		<span class="error-message"><?php echo $form->error($model,'goldarah'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kacamata'); ?>
		<?php echo $form->textField($model,'kacamata',array('size'=>10,'maxlength'=>10)); ?>
		<span class="error-message"><?php echo $form->error($model,'kacamata'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'plus'); ?>
		<?php echo $form->textField($model,'plus'); ?>
		<span class="error-message"><?php echo $form->error($model,'plus'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'minus'); ?>
		<?php echo $form->textField($model,'minus'); ?>
		<span class="error-message"><?php echo $form->error($model,'minus'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'cylindris'); ?>
		<?php echo $form->textField($model,'cylindris'); ?>
		<span class="error-message"><?php echo $form->error($model,'cylindris'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'statusnikah'); ?>
		<?php echo $form->textField($model,'statusnikah',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'statusnikah'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'alamat'); ?>
		<?php echo $form->textArea($model,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'alamat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'kota'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'propinsi'); ?>
		<?php echo $form->textField($model,'propinsi',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'propinsi'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'kodepos'); ?>
		<?php echo $form->textField($model,'kodepos'); ?>
		<span class="error-message"><?php echo $form->error($model,'kodepos'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'telp'); ?>
		<?php echo $form->textField($model,'telp',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($model,'telp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'hp'); ?>
		<?php echo $form->textField($model,'hp',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($model,'hp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'noktp'); ?>
		<?php echo $form->textField($model,'noktp',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'noktp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'tgldikeluarkan'); ?>
		<?php echo $form->textField($model,'tgldikeluarkan'); ?>
		<span class="error-message"><?php echo $form->error($model,'tgldikeluarkan'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'berlakuktp'); ?>
		<?php echo $form->textField($model,'berlakuktp'); ?>
		<span class="error-message"><?php echo $form->error($model,'berlakuktp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'nosim'); ?>
		<?php echo $form->textField($model,'nosim',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'nosim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'tgldikeluarkansim'); ?>
		<?php echo $form->textField($model,'tgldikeluarkansim'); ?>
		<span class="error-message"><?php echo $form->error($model,'tgldikeluarkansim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'berlakusim'); ?>
		<?php echo $form->textField($model,'berlakusim'); ?>
		<span class="error-message"><?php echo $form->error($model,'berlakusim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'email'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'photo'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'catatan'); ?>
		<?php echo $form->textArea($model,'catatan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($model,'catatan'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'userinput'); ?>
		<?php echo $form->textField($model,'userinput',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'userinput'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'tglinput'); ?>
		<?php echo $form->textField($model,'tglinput'); ?>
		<span class="error-message"><?php echo $form->error($model,'tglinput'); ?></span>
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


