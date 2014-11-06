<?php
/* @var $this MRecruitmentController */
/* @var $data MRecruitment */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('recruitment_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->recruitment_id), array('view', 'id'=>$data->recruitment_id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('year_recruitment')); ?>:</b>
	<?php echo CHtml::encode($data->year_recruitment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office')); ?>:</b>
	<?php echo CHtml::encode($data->office); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('departemen')); ?>:</b>
	<?php echo CHtml::encode($data->departemen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seksi')); ?>:</b>
	<?php echo CHtml::encode($data->seksi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('divisi')); ?>:</b>
	<?php echo CHtml::encode($data->divisi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('occuption')); ?>:</b>
	<?php echo CHtml::encode($data->occuption); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_selection')); ?>:</b>
	<?php echo CHtml::encode($data->type_selection); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('media_promotion')); ?>:</b>
	<?php echo CHtml::encode($data->media_promotion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	*/ ?>
