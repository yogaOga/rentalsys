<?php
/* @var $this MSeksiController */
/* @var $data MSeksi */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('seksi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->seksi_id), array('view', 'id'=>$data->seksi_id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('seksi_kode')); ?>:</b>
	<?php echo CHtml::encode($data->seksi_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seksi_name')); ?>:</b>
	<?php echo CHtml::encode($data->seksi_name); ?>
	<br />

