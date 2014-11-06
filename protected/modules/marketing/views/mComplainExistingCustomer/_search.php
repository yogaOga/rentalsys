<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */
/* @var $form CActiveForm */
?>

<div class="content">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    ));
    ?>

    <div class="input">
        <?php // echo $form->label($model,'id');  ?>
        <?php //echo $form->textField($model,'id');  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model, 'periode'); ?>
        <?php echo $form->dropDownList($model, 'periode', array('January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December'), array('empty' => '-select-')); ?>
        <?php //echo $form->textField($model,'periode',array('size'=>50,'maxlength'=>50));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model, 'branch'); ?>
        <?php //echo $form->textField($model, 'branch'); ?>
        <?php echo $form->dropDownList($model, 'branch', CHtml::listData(LBranch::model()->findAll(), 'id', 'branch_name'), array('empty' => '-select-')); ?>

    </div>

    <div class="input">
        <?php echo $form->label($model, 'marketing_officer'); ?>
        <?php echo $form->textField($model, 'marketing_officer'); ?>
    </div>

  <div class="input">
        <?php echo $form->label($model,'customer');  ?>
        <?php  echo $form->textField($model,'customer',array('size'=>60,'maxlength'=>100));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'complain_date');  ?>
        <?php echo $form->textField($model,'complain_date');  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'complain');  ?>
        <?php echo $form->textField($model,'complain',array('size'=>60,'maxlength'=>255));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'complainer_name');  ?>
        <?php echo $form->textField($model,'complainer_name',array('size'=>60,'maxlength'=>100));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'follow_up_date');  ?>
        <?php echo $form->textField($model,'follow_up_date');  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'follow_up_description');  ?>
        <?php echo $form->textField($model,'follow_up_description',array('size'=>60,'maxlength'=>255));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'pic');  ?>
        <?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>100));  ?>
    </div>

    <div class="input">
        <?php echo $form->label($model,'remarks');  ?>
        <?php echo $form->textField($model,'remarks',array('size'=>60,'maxlength'=>255));  ?>
    </div>
<!--  
    <div class="input">
        <?php //echo $form->label($model,'created_user');  ?>
        <?php //echo $form->textField($model,'created_user');  ?>
    </div>

    <div class="input">
        <?php //echo $form->label($model,'created_date');  ?>
        <?php //echo $form->textField($model,'created_date');  ?>
    </div>

    <div class="input">
        <?php //echo $form->label($model,'updated_user');  ?>
        <?php //echo $form->textField($model,'updated_user');  ?>
    </div>

    <div class="input">
        <?php //echo $form->label($model,'updated_date');  ?>
        <?php //echo $form->textField($model,'updated_date');  ?>
    </div>-->

    <div class="submit">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->