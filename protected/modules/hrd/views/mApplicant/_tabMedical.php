<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'maag'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'maag'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'maag'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'ginjal'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'ginjal'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'ginjal'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'stress'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'stress'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'stress'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'jantung'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'jantung'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'jantung'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'tekanan_darah'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'tekanan_darah'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'tekanan_darah'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'diabetes'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'diabetes'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'diabetes'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'lever_hepatitis'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'lever_hepatitis'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'lever_hepatitis'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'pusing_migren'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'pusing_migren'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'pusing_migren'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'paruparu_asma'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'paruparu_asma'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'paruparu_asma'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'others'); ?>
    <?php echo CHtml::activeCheckBox($modelMedicalApp, 'others'); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'others'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'days'); ?>
    <?php echo CHtml::activeTelField($modelMedicalApp, 'days', array('size' => 50, 'maxlength' => 5, 'placeholder' => 'Days')); ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'days'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'willing_out_of_town'); ?>
    <?php
    echo CHtml::activeRadioButtonList($modelMedicalApp, 'willing_out_of_town', array(1 => 'Yes',
        0 => 'No'));
    ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'days'); ?></span>
</div>
<div class="input">
    <?php echo CHtml::activeLabel($modelMedicalApp, 'willing_overtime'); ?>
    <?php
    echo CHtml::activeRadioButtonList($modelMedicalApp, 'willing_overtime', array(1 => 'Yes',
        0 => 'No'));
    ?>
    <span class="error-message"><?php echo CHtml::error($modelMedicalApp, 'days'); ?></span>
</div>