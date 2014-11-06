<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_person_name'); ?>
    <?php echo $form->textField($model, 'emergency_person_name', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Person Name')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_person_name'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_relation'); ?>
    <?php echo $form->textField($model, 'emergency_relation', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Relation')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_relation'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_mobile'); ?>
    <?php echo $form->textField($model, 'emergency_mobile', array('size' => 50, 'maxlength' => 50, 'placeholder' => '0812-34567890')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_mobile'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_ext_reference'); ?>
    <?php echo $form->textField($model, 'emergency_ext_reference', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'External Refernce')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_ext_reference'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_ext_address'); ?>
    <?php echo $form->textArea($model, 'emergency_ext_address', array('maxlength' => 50, 'placeholder' => 'Address')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_ext_address'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_ext_phone'); ?>
    <?php echo $form->textField($model, 'emergency_ext_phone', array('size' => 50, 'maxlength' => 50, 'placeholder' => '(021)-2345678')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_ext_phone'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_int_reference'); ?>
    <?php echo $form->textField($model, 'emergency_int_reference', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Internal Reference')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_int_reference'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_int_position'); ?>
    <?php echo $form->textField($model, 'emergency_int_position', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Position')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_int_position'); ?></span>
</div>
<div class="input">
    <?php echo $form->labelEx($model, 'emergency_int_location'); ?>
    <?php echo $form->textField($model, 'emergency_int_location', array('size' => 50, 'maxlength' => 50, 'placeholder' => 'Location')); ?>
    <span class="error-message"><?php echo $form->error($model, 'emergency_int_location'); ?></span>
</div>