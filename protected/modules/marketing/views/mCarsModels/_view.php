<?php
/* @var $this MCarsModelsController */
/* @var $data MCarsModels */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_id')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('model_name')); ?>:</b>
	<?php echo CHtml::encode($data->model_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

