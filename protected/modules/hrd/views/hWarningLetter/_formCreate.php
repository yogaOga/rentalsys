<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'hwarning-letter-form',
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
    echo '<div class="notif error"><a href="#" class="close">x</a>' . $form->errorSummary($model) . '</div>';
}
?>


<div class="input">
    <?php echo $form->labelEx($model, 'nip'); ?>
    <?php echo $form->hiddenField($model, 'employee_id'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'nip',
        'source' => $this->createUrl('HWarningLetter/GetEmpByID'),
        // additional javascript options for the autocomplete plugin
        'options' => array(
            'showAnim' => 'fold',
            'minLength' => 2,
            'select' => "js:function(event, ui){
                                        setForm(ui.item);
                                        return false;
                                }",
        ),
        'htmlOptions' => array(
            'placeholder' => 'Employee ID',
        )
    ));
    ?>
    <span class="error-message"><?php echo $form->error($model, 'nip'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'employee_name'); ?>
    <?php
    $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
        'model' => $model,
        'attribute' => 'employee_name',
        'source' => $this->createUrl('HWarningLetter/GetEmpByName'),
        // additional javascript options for the autocomplete plugin
        'options' => array(
            'showAnim' => 'fold',
            'minLength' => 2,
            'select' => "js:function(event, ui){
                                        setForm(ui.item);
                                        return false;
                                }",
        ),
        'htmlOptions' => array(
            'placeholder' => 'Employee Name',
        )
    ));
    ?>
    <span class="error-message"><?php echo $form->error($model, 'employee_name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'position'); ?>
    <?php echo $form->textField($model, 'position', array('size' => 50, 'maxlength' => 50, 'readonly'=>true)); ?>
    <span class="error-message"><?php echo $form->error($model, 'position'); ?></span>
</div>

<div class="input textarea">
    <?php echo $form->labelEx($model, 'description'); ?>
    <?php echo $form->textArea($model, 'description', array('rows' => 7, 'cols' => 45, 'class' => '')); ?>
    <span class="error-message"><?php echo $form->error($model, 'description'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'warning_type'); ?>
    <?php echo $form->textField($model, 'warning_type', array('size' => 45, 'maxlength' => 45)); ?>
    <span class="error-message"><?php echo $form->error($model, 'warning_type'); ?></span>
</div>

<div class="submit form-action">
        <div class="left">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <?php echo CHtml::button('Reset', array('type' => 'reset', 'class' => 'white')); ?>
        </div>
        <div class="right">
            <?php echo CHtml::button('Cancel', array('type' => 'button', 'class' => 'button btn black', 'onclick' => 'confirmCancel()')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori
    
     
     // jQueryPlugin for Field Text Mandatory Readonly
     $(document).ready(function() {
     $("#<?=CHtml::activeId($model, "position")?>").textMandatoryReadOnly();
     });
     
     // jQueryPlugin for Field Free Text mandatory
     $(document).ready(function() {
     $("#<?=CHtml::activeId($model, "nip")?>, \n\
        #<?=CHtml::activeId($model, "employee_name")?>, \n\
        #<?=CHtml::activeId($model, "description")?>, \n\
        #<?=CHtml::activeId($model, "warning_type")?>").textMandatoryFree();
     });
     /*
     // jQueryPlugin for Field Text Readonly
     $(document).ready(function() {
     $("#id, #id,").textReadOnly();
     });
     */
    
    function setForm(data){
        $("#<?=CHtml::activeId($model, "employee_id")?>").val(data.id);
        $("#<?=CHtml::activeId($model, "nip")?>").val(data.nip);
        $("#<?=CHtml::activeId($model, "employee_name")?>").val(data.first_name +" "+ data.last_name);
        $("#<?=CHtml::activeId($model, "position")?>").val(data.position);
    }
    
    function confirmCancel(){
        var cnf = confirm("Are you sure for cancel?");
        if( cnf === true){
            window.location.assign("<?php echo $this->createUrl('Admin'); ?>");
        }
    }
</script>


