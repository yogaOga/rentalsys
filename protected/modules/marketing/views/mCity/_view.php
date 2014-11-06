<?php
/* @var $this MCityController */
/* @var $data MCity */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('regional_id')); ?>:</b>
	<?php echo CHtml::encode($data->regional_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_city')); ?>:</b>
	<?php echo CHtml::encode($data->name_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

