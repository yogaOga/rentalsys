<?php
/* @var $this MEmployeeController */
/* @var $model MEmployee */

$this->breadcrumbs=array(
	'Memployees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List MEmployee', 'url'=>array('index')),
array('label'=>'Create MEmployee', 'url'=>array('create')),
array('label'=>'View MEmployee', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage MEmployee', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Employee #<?php echo $model->nip; ?></h1>
<div class="bloc">
    <div class="title">
        Form Employee
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
            'id' => 'memployee-form',
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
            <?php $this->renderPartial('_tabFamily', array('model' => $model, 'form' => $form, 'this' => $this)); ?>
        </div>
        <div id="tab16">
            <?php $this->renderPartial('_tabMedical', array('model' => $model, 'modelMedicalApp' => $modelMedicalEmp, 'form' => $form)); ?>
        </div>

    </div>
</div>
<div class="bloc">
    <div class="submit form-action">
        <div class="left">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <?php //echo CHtml::button('Hire Now', array('type' => 'button', 'class' => 'button', 'onclick' => '$("#dialogFireNow").dialog("open");')); ?>
        </div>
        <div class="right">
            <?php echo CHtml::button('Cancel', array('type' => 'button', 'class' => 'button btn black', 'onclick' => 'confirmCancel()')); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>