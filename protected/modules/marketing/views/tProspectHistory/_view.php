<?php
/* @var $this TProspectHistoryController */
/* @var $data TProspectHistory */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('history_id')); ?>:</b>
	<?php echo CHtml::encode($data->history_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prospect_id')); ?>:</b>
	<?php echo CHtml::encode($data->prospect_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_prospect')); ?>:</b>
	<?php echo CHtml::encode($data->status_prospect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_prospect')); ?>:</b>
	<?php echo CHtml::encode($data->type_prospect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit_need')); ?>:</b>
	<?php echo CHtml::encode($data->unit_need); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('competitor')); ?>:</b>
	<?php echo CHtml::encode($data->competitor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('description_prospect')); ?>:</b>
	<?php echo CHtml::encode($data->description_prospect); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('next_plan')); ?>:</b>
	<?php echo CHtml::encode($data->next_plan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_prospect')); ?>:</b>
	<?php echo CHtml::encode($data->date_prospect); ?>
	<br />

	*/ ?>
