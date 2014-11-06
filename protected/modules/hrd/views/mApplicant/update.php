<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */

$this->breadcrumbs = array(
    'Mapplicants' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List MApplicant', 'url' => array('index')),
    array('label' => 'Create MApplicant', 'url' => array('create')),
    array('label' => 'View MApplicant', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage MApplicant', 'url' => array('admin')),
);
?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Applicant #<?php echo $model->applicant_no; ?></h1>
<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach ($flashMessages as $key => $message) {
        echo '<div class="notif ' . $key . ' bloc">'
        . '<strong>' . $key . '</strong> ' . $message . '<a href="#" class="close">x</a></div>';
    }
}
?>
<div class="bloc">
    <div class="title">
        Form Applicant
        <div class="tabs" id="tabs1">
            <a href="#tab11">Personal</a>
            <a href="#tab12">Emergency Call</a>
            <a href="#tab13">Education</a>
            <a href="#tab14">Occupation</a>
            <a href="#tab15">Family</a>
            <a href="#tab16">Medical</a>
        </div>
    </div>
    <div class="content">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'mapplicant-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => true,
            'htmlOptions' => array(
                'enctype' => 'multipart/form-data',
            ),
        ));
        ?>
        <div id="tab11">
            <?php $this->renderPartial('_formUpdate', array('model' => $model, 'form' => $form)); ?>
        </div>
        <div id="tab12">
            <?php $this->renderPartial('_tabEmergencyCall', array('model' => $model, 'form' => $form)); ?>
        </div>
        <div id="tab13">
            <?php $this->renderPartial('_tabEducation', array('model' => $model, 'form' => $form)); ?>
        </div>
        <div id="tab14">
            <?php $this->renderPartial('_tabOccupation', array('model' => $model, 'form' => $form)); ?>
        </div>
        <div id="tab15">
            <?php $this->renderPartial('_tabFamily', array('model' => $model, 'modelFamilyApp' => $modelFamilyApp, 'form' => $form, 'this' => $this)); ?>
        </div>
        <div id="tab16">
            <?php $this->renderPartial('_tabMedical', array('model' => $model, 'modelMedicalApp' => $modelMedicalApp, 'form' => $form)); ?>
        </div>

    </div>
</div>
<div class="bloc">
    <div class="submit form-action">
        <div class="left">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <?php echo CHtml::button('Hire Now', array('type' => 'button', 'class' => 'button', 'onclick' => '$("#dialogFireNow").dialog("open");')); ?>
        </div>
        <div class="right">
            <?php echo CHtml::button('Cancel', array('type' => 'button', 'class' => 'button btn black', 'onclick' => 'confirmCancel()')); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>

<!-- Dialog Hire Now -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogFireNow',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Hire Applicant',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Hire' => 'js:function(){$("form#form-hire-now").submit();}',
            'Cancel' => 'js:function(){$("#dialogFireNow").dialog("close");}',
        ),
    ),
));
?>
<div id="dialog">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'form-hire-now',
        'action' => $this->createUrl("MApplicant/hireNow&id=".$model->id),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => true,
    ));
    ?>
    
    <div class="input">
        <?php echo CHtml::label('Date of Birth <span class="required">*</span>', 'join_date', array('class' => 'required')); ?>
        <?php echo CHtml::textField('join_date', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Join Date', 'class' => 'datepicker required')); ?>

    </div>

    <div class="input">
        <?php echo CHtml::label('Position <span class="required">*</span>', 'position'); ?>         
        <?php echo CHtml::dropDownList('position', '', array('MANAGER' => 'Manager', 'SUPERVISOR' => 'Supervisor', 'STAFF'=>'Staff'), array('size' => 2, 'maxlength' => 1, 'empty' => '- Select', 'class' => 'required')); ?>
        <?php echo CHtml::hiddenField('birth_date',$model->birth_date);?>
    </div>

    <?php $this->endWidget(); ?>
</div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>