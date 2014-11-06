
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="bloc">
    <div class="title">Contact</div>
    <div class="content">
		<p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="input">
            <?php echo $form->labelEx($model,'name'); ?>
			<?php echo $form->textField($model,'name'); ?>
			<?php echo $form->error($model,'name'); ?>
        </div>
		<div class="submit">
			<?php echo CHtml::submitButton('Send'); ?>
		</div>
    </div>
</div>
<?php $this->endWidget(); ?>
