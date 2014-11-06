<?php
/* @var $this GajipokokController */
/* @var $data Gajipokok */
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('gajipokok')); ?>:</b>
	<?php echo CHtml::encode($data->gajipokok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

