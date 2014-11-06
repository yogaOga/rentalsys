<?php
/* @var $this MTypeCarsController */
/* @var $data MTypeCars */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('model_car_id')); ?>:</b>
	<?php echo CHtml::encode($data->model_car_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_name')); ?>:</b>
	<?php echo CHtml::encode($data->type_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

