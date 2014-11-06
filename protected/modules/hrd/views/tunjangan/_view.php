<?php
/* @var $this TunjanganController */
/* @var $data Tunjangan */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('tglawal')); ?>:</b>
	<?php echo CHtml::encode($data->tglawal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglakhir')); ?>:</b>
	<?php echo CHtml::encode($data->tglakhir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nmtunjangan')); ?>:</b>
	<?php echo CHtml::encode($data->nmtunjangan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

