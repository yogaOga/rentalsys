<?php
/* @var $this MTypeCarsController */
/* @var $model MTypeCars */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mtype-cars-form',
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
		<?php echo $form->labelEx($model,'model_car_id'); ?>
                <?php echo $form->dropDownList($model,'model_car_id',CHtml::listData(MCarsModels::model()->findAll(), 'id', 'model_name'),array('empty'=>'-Select-')); ?>
		<span class="error-message"><?php echo $form->error($model,'model_car_id'); ?></span>
	</div>

	<div class="input">
		<?php echo $form->labelEx($model,'type_name'); ?>
		<?php echo $form->textField($model,'type_name',array('size'=>60,'maxlength'=>100)); ?>
		<span class="error-message"><?php echo $form->error($model,'type_name'); ?></span>
	</div>

	<div class="input">
		<?php // echo $form->labelEx($model,'create_user'); ?>
		<?php echo $form->hiddenField($model,'create_user',array('value'=>1)); ?>
		<span class="error-message"><?php echo $form->error($model,'create_user'); ?></span>
	</div>

	<div class="submit">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#MTypeCars_model_car_id, #MTypeCars_type_name").mandatoryPluginID();
    });

</script>


