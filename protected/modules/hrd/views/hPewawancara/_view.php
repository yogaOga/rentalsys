<?php
/* @var $this HPewawancaraController */
/* @var $data HPewawancara */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_id')); ?>:</b>
	<?php echo CHtml::encode($data->recruitment_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kantor_id')); ?>:</b>
	<?php echo CHtml::encode($data->kantor_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departement_id')); ?>:</b>
	<?php echo CHtml::encode($data->departement_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seksi_id')); ?>:</b>
	<?php echo CHtml::encode($data->seksi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divisi_id')); ?>:</b>
	<?php echo CHtml::encode($data->divisi_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_id')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('nmpewawancara')); ?>:</b>
	<?php echo CHtml::encode($data->nmpewawancara); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan')); ?>:</b>
	<?php echo CHtml::encode($data->catatan); ?>
	<br />

	*/ ?>
