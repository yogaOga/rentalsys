<?php
/* @var $this MCarRentalController */
/* @var $data MCarRental */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('no_cmd')); ?>:</b>
	<?php echo CHtml::encode($data->no_cmd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobil_id')); ?>:</b>
	<?php echo CHtml::encode($data->mobil_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('unit')); ?>:</b>
	<?php echo CHtml::encode($data->unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('klas_driver')); ?>:</b>
	<?php echo CHtml::encode($data->klas_driver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rental_rates')); ?>:</b>
	<?php echo CHtml::encode($data->rental_rates); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contract_periode')); ?>:</b>
	<?php echo CHtml::encode($data->contract_periode); ?>
	<br />

