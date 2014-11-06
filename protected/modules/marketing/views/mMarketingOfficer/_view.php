<?php
/* @var $this MMarketingOfficerController */
/* @var $data MMarketingOfficer */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('mo_id')); ?>:</b>
	<?php echo CHtml::encode($data->mo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mo_name')); ?>:</b>
	<?php echo CHtml::encode($data->mo_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_user')); ?>:</b>
	<?php echo CHtml::encode($data->created_user); ?>
	<br />

