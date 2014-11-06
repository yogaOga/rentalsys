<?php
/* @var $this InsentifController */
/* @var $data Insentif */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('tglinsentif')); ?>:</b>
	<?php echo CHtml::encode($data->tglinsentif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nminsentif')); ?>:</b>
	<?php echo CHtml::encode($data->nminsentif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilai')); ?>:</b>
	<?php echo CHtml::encode($data->nilai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

