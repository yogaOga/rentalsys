<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tprospect-history-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if($form->errorSummary($modHistory)){
            echo '<div class="notif error">' .$form->errorSummary($modHistory).'</div>';
                } ?>
        
         

	<div class="input">
		<?php echo $form->labelEx($modHistory,'prospect_id'); ?>
		<?php echo $form->textField($modHistory,'prospect_id',array('size'=>45,'maxlength'=>45,'readonly'=>true )); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'prospect_id'); ?></span>
	</div>
                 <?php echo $form->hiddenField($modHistory, 'history_id', array('readonly' => true, 'size' => 45, 'maxlength' => 45,'value'=>$this->noProspectHistory())); ?>
   
	<div class="input">
		<?php echo $form->labelEx($modHistory,'status_prospect'); ?>
                <?php echo $form->dropDownList($modHistory,'status_prospect', array('HOT' => 'HOT', 'WARM' => 'WARM', 'COLD' => 'COLD'), array('empty' => '-select-')); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'status_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modHistory,'type_prospect'); ?>
                <?php echo $form->dropDownList($modHistory,'type_prospect',array('Visit' => 'Visit', 'Call By Phone' => 'Call By Phone', 'Email' => 'Email', 'Meeting and Persentasi' => 'Meeting and Persentasi'), array('empty' => '-select-')); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'type_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modHistory,'unit_need'); ?>
		<?php echo $form->textField($modHistory,'unit_need',array('size'=>60,'maxlength'=>255,'placeholder'=>'input unit need')); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'unit_need'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modHistory,'competitor'); ?>
		<?php echo $form->textField($modHistory,'competitor',array('size'=>50,'maxlength'=>50,'placeholder'=>'input competitor')); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'competitor'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modHistory,'description_prospect'); ?>
		<?php echo $form->textArea($modHistory,'description_prospect',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'description_prospect'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($modHistory,'next_plan'); ?>
		<?php echo $form->textArea($modHistory,'next_plan',array('rows'=>6, 'cols'=>50)); ?>
		<span class="error-message"><?php echo $form->error($modHistory,'next_plan'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($modHistory->isNewRecord ? 'Create' : 'Update'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#TProspectHistory_prospect_id, #id,").mandatoryPlugin();
        $("#TProspectHistory_status_prospect, #TProspectHistory_type_prospect,#TProspectHistory_unit_need").mandatoryPluginID();
    });

</script>


