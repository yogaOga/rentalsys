<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */

$this->breadcrumbs = array(
    'Mapplicants' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List MApplicant', 'url' => array('index')),
    array('label' => 'Manage MApplicant', 'url' => array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> New Applicant</h1>
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
            <?php $this->renderPartial('_formCreate', array('model' => $model, 'form' => $form)); ?>            
        </div>
    </div>
</div>
<div class="bloc">
    <div class="submit form-action">
        <div class="left">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            <?php echo CHtml::button('Reset', array('type' => 'reset', 'class' => 'white')); ?>
        </div>
        <div class="right">
            <?php echo CHtml::button('Cancel', array('type' => 'button', 'class' => 'button btn black', 'onclick' => 'confirmCancel()')); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>