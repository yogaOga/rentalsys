<?php
/* @var $this MComplainExistingCustomerController */
/* @var $data MComplainExistingCustomer */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('periode')); ?>:</b>
	<?php echo CHtml::encode($data->periode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch')); ?>:</b>
	<?php echo CHtml::encode($data->branch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marketing_officer')); ?>:</b>
	<?php echo CHtml::encode($data->marketing_officer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer')); ?>:</b>
	<?php echo CHtml::encode($data->customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complain_date')); ?>:</b>
	<?php echo CHtml::encode($data->complain_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('complain')); ?>:</b>
	<?php echo CHtml::encode($data->complain); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('complainer_name')); ?>:</b>
	<?php echo CHtml::encode($data->complainer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('follow_up_date')); ?>:</b>
	<?php echo CHtml::encode($data->follow_up_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('follow_up_description')); ?>:</b>
	<?php echo CHtml::encode($data->follow_up_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pic')); ?>:</b>
	<?php echo CHtml::encode($data->pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_user')); ?>:</b>
	<?php echo CHtml::encode($data->created_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_date')); ?>:</b>
	<?php echo CHtml::encode($data->created_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_user')); ?>:</b>
	<?php echo CHtml::encode($data->updated_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_date')); ?>:</b>
	<?php echo CHtml::encode($data->updated_date); ?>
	<br />

	*/ ?>
