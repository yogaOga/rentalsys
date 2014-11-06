<?php
/* @var $this LBranchController */
/* @var $data LBranch */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('branch_name')); ?>:</b>
	<?php echo CHtml::encode($data->branch_name); ?>
	<br />

