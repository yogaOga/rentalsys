<?php
/* @var $this HKandidatController */
/* @var $modelKandidat HKandidat */
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

	<?php if($form->errorSummary($modelKandidat)){
            echo '<div class="notif error"><a href="#" class="close">x</a>' .$form->errorSummary($modelKandidat).'</div>';
                } ?>
        
         
<div class="left">
	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'kode_kandidat'); ?>
		<?php echo $form->textField($modelKandidat,'kode_kandidat',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'kode_kandidat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'nama_kandidat'); ?>
		<?php echo $form->textField($modelKandidat,'nama_kandidat',array('size'=>60,'maxlength'=>200)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'nama_kandidat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'tempatlahir'); ?>
		<?php echo $form->textField($modelKandidat,'tempatlahir',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'tempatlahir'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'tgllahir'); ?>
		<?php echo $form->textField($modelKandidat,'tgllahir'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'tgllahir'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'agama'); ?>
		<?php echo $form->textField($modelKandidat,'agama'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'agama'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'kelamin'); ?>
		<?php echo $form->textField($modelKandidat,'kelamin',array('size'=>50,'maxlength'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'kelamin'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'goldarah'); ?>
		<?php echo $form->textField($modelKandidat,'goldarah',array('size'=>5,'maxlength'=>5)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'goldarah'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'kacamata'); ?>
		<?php echo $form->textField($modelKandidat,'kacamata',array('size'=>10,'maxlength'=>10)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'kacamata'); ?></span>
	</div>

	<div class="input">
		<?php // echo $form->labelEx($modelKandidat,'plus'); ?>
		<?php // echo $form->textField($modelKandidat,'plus'); ?>
		<span class="error-message"><?php // echo $form->error($modelKandidat,'plus'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'minus'); ?>
		<?php echo $form->textField($modelKandidat,'minus'); ?>
		<span class="error-message"><?php // echo $form->error($modelKandidat,'minus'); ?></span>
	</div>

	<div class="input">
		<?php // echo $form->labelEx($modelKandidat,'cylindris'); ?>
		<?php // echo $form->textField($modelKandidat,'cylindris'); ?>
		<span class="error-message"><?php // echo $form->error($modelKandidat,'cylindris'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'statusnikah'); ?>
		<?php echo $form->textField($modelKandidat,'statusnikah',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'statusnikah'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'alamat'); ?>
		<?php echo $form->textArea($modelKandidat,'alamat',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'alamat'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'kota'); ?>
		<?php echo $form->textField($modelKandidat,'kota',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'kota'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'propinsi'); ?>
		<?php echo $form->textField($modelKandidat,'propinsi',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'propinsi'); ?></span>
	</div>

</div>
<div class="right">
	
	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'kodepos'); ?>
		<?php echo $form->textField($modelKandidat,'kodepos'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'kodepos'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'telp'); ?>
		<?php echo $form->textField($modelKandidat,'telp',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'telp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'hp'); ?>
		<?php echo $form->textField($modelKandidat,'hp',array('size'=>15,'maxlength'=>15)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'hp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'noktp'); ?>
		<?php echo $form->textField($modelKandidat,'noktp',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'noktp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'tgldikeluarkan'); ?>
		<?php echo $form->textField($modelKandidat,'tgldikeluarkan'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'tgldikeluarkan'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'berlakuktp'); ?>
		<?php echo $form->textField($modelKandidat,'berlakuktp'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'berlakuktp'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'nosim'); ?>
		<?php echo $form->textField($modelKandidat,'nosim',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'nosim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'tgldikeluarkansim'); ?>
		<?php echo $form->textField($modelKandidat,'tgldikeluarkansim'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'tgldikeluarkansim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'berlakusim'); ?>
		<?php echo $form->textField($modelKandidat,'berlakusim'); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'berlakusim'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'email'); ?>
		<?php echo $form->textField($modelKandidat,'email',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'email'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'photo'); ?>
		<?php echo $form->textField($modelKandidat,'photo',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'photo'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modelKandidat,'catatan'); ?>
		<?php echo $form->textArea($modelKandidat,'catatan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modelKandidat,'catatan'); ?></span>
	</div>
	
	<div class="submit">
		<?php echo CHtml::submitButton($modelKandidat->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
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


