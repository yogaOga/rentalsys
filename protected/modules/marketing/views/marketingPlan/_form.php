<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'marketing-plan-form',
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
		<?php echo $form->labelEx($model,'Nama_Marketing'); ?>
		<?php echo $form->textField($model,'Nama_Marketing',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Nama_Marketing'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Marketing_Items'); ?>
		<?php echo $form->textField($model,'Marketing_Items',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Marketing_Items'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Start_End_Date'); ?>
		<?php echo $form->textField($model,'Start_End_Date',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Start_End_Date'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Durasi_Pekerjaan'); ?>
		<?php echo $form->textField($model,'Durasi_Pekerjaan',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Durasi_Pekerjaan'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Skala_Prioritas'); ?>
		<?php echo $form->textField($model,'Skala_Prioritas',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Skala_Prioritas'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Estimasi_Hasil'); ?>
		<?php echo $form->textField($model,'Estimasi_Hasil',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Estimasi_Hasil'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Result_Final'); ?>
		<?php echo $form->textField($model,'Result_Final',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Result_Final'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'Note_Manager'); ?>
		<?php echo $form->textField($model,'Note_Manager',array('size'=>20,'maxlength'=>20)); ?>
		<span class="error-message"><?php echo $form->error($model,'Note_Manager'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#MarketingPlan_Nama_Marketing, #MarketingPlan_Estimasi_Hasil").mandatoryPluginID();
		$("#MarketingPlan_Nama_Marketing").mandatoryPlugin();
    });
</script>


