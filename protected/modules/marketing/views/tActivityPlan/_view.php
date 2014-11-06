<?php
/* @var $this TActivityPlanController */
/* @var $data TActivityPlan */
?>

<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('id_marketing')); ?>:</b>
<?php echo CHtml::encode($data->id_marketing); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
<?php echo CHtml::encode($data->start_date); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('end_date')); ?>:</b>
<?php echo CHtml::encode($data->end_date); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('working_duration')); ?>:</b>
<?php echo CHtml::encode($data->working_duration); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('scale_of_priority_id')); ?>:</b>
<?php echo CHtml::encode($data->scale_of_priority_id); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('estimation_of_result')); ?>:</b>
<?php echo CHtml::encode($data->estimation_of_result); ?>
<br />

<?php /*
  <b><?php echo CHtml::encode($data->getAttributeLabel('final_result_id')); ?>:</b>
  <?php echo CHtml::encode($data->final_result_id); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('note_of_manager')); ?>:</b>
  <?php echo CHtml::encode($data->note_of_manager); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('created_user')); ?>:</b>
  <?php echo CHtml::encode($data->created_user); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
  <?php echo CHtml::encode($data->created_date); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('update_user')); ?>:</b>
  <?php echo CHtml::encode($data->update_user); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
  <?php echo CHtml::encode($data->update_date); ?>
  <br />

 */ ?>
