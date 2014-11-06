<?php
/* @var $this MDriversController */
/* @var $data MDrivers */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('no_driver')); ?>:</b>
	<?php echo CHtml::encode($data->no_driver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver_name')); ?>:</b>
	<?php echo CHtml::encode($data->driver_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

