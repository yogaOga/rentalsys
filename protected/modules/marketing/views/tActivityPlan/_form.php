<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'tactivity-plan-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php
if ($form->errorSummary($model)) {
    echo '<div class="notif error">' . $form->errorSummary($model) . '</div>';
}
?>



<div class="input">
    <?php echo $form->labelEx($model, 'id_marketing'); ?>
    <?php echo $form->textField($model, 'id_marketing'); ?>
    <span class="error-message"><?php echo $form->error($model, 'id_marketing'); ?></span>
</div>

<div class="input">
    <label>Start - End Date</label>
    <?php echo $form->textField($model, 'start_date'); ?> to <?php echo $form->textField($model, 'end_date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'start_date'); ?></span>
    <span class="error-message"><?php echo $form->error($model, 'end_date'); ?></span>
</div>


<div class="input">
    <?php echo $form->labelEx($model, 'working_duration'); ?>
    <?php echo $form->textField($model, 'working_duration'); ?> day(s)
    <span class="error-message"><?php echo $form->error($model, 'working_duration'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'scale_of_priority_id'); ?>
    <?php // echo $form->textField($model, 'scale_of_priority_id'); ?>
    <?php echo $form->dropDownList($model, 'scale_of_priority_id', CHtml::listData(MlScaleOfPriority::model()->findAll(), 'id', 'scale_of_priority'), array('empty' => '-select-')); ?>

    <span class="error-message"><?php echo $form->error($model, 'scale_of_priority_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'estimation_of_result'); ?>
    <?php echo $form->textArea($model, 'estimation_of_result', array('size' => 60, 'maxlength' => 255, 'maxlength' => 255, 'size' => 60, 'rows' => 6, 'cols' => 10)); ?>
    <span class="error-message"><?php echo $form->error($model, 'estimation_of_result'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'final_result_id'); ?>
    <?php //echo $form->textField($model, 'final_result_id'); ?>
    <?php echo $form->dropDownList($model, 'final_result_id', CHtml::listData(MlFinalResult::model()->findAll(), 'id', 'final_result'), array('empty' => '-select-')); ?>

    <span class="error-message"><?php echo $form->error($model, 'final_result_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'note_of_manager'); ?>
    <?php echo $form->textArea($model, 'note_of_manager', array('maxlength' => 255, 'size' => 60, 'rows' => 6, 'cols' => 10)); ?>

    <span class="error-message"><?php echo $form->error($model, 'note_of_manager'); ?></span>
</div>



<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori


    // jQueryPlugin for Field Text Mandatory Readonly
    $(document).ready(function() {
        $("#TActivityPlan_id_marketing").textMandatoryReadOnly();
        $("#TActivityPlan_estimation_of_result").textMandatoryFree();
        $("#TActivityPlan_working_duration").textReadOnly();
        $("#TActivityPlan_start_date").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd",
            onClose: function(selectedDate) {
                $("#TActivityPlan_end_date").datepicker("option", "minDate", selectedDate);
                $("#TActivityPlan_working_duration").showRangeDate($("#TActivityPlan_start_date").val().trim(), $("#TActivityPlan_end_date").val().trim());

            }
        });
        $("#TActivityPlan_end_date").datepicker({
            defaultDate: "+1w",
            changeMonth: true,
            changeYear: true,
            numberOfMonths: 1,
            dateFormat: "yy-mm-dd",
            onClose: function(selectedDate) {
                $("#TActivityPlan_start_date").datepicker("option", "maxDate", selectedDate);
                $("#TActivityPlan_working_duration").showRangeDate($("#TActivityPlan_start_date").val().trim(), $("#TActivityPlan_end_date").val().trim());

            }
        });
    });




</script>


