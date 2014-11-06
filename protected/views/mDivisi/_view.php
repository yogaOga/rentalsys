<?php
/* @var $this MDivisiController */
/* @var $data MDivisi */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('divisi_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->divisi_id), array('view', 'id'=>$data->divisi_id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('divisi_kode')); ?>:</b>
	<?php echo CHtml::encode($data->divisi_kode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divisi_name')); ?>:</b>
	<?php echo CHtml::encode($data->divisi_name); ?>
	<br />

