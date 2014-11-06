<?php
/* @var $this TQuotationController */
/* @var $data TQuotation */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('marketing_id')); ?>:</b>
	<?php echo CHtml::encode($data->marketing_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_id')); ?>:</b>
	<?php echo CHtml::encode($data->customer_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customer_name')); ?>:</b>
	<?php echo CHtml::encode($data->customer_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact_person')); ?>:</b>
	<?php echo CHtml::encode($data->contact_person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('name_of_employer')); ?>:</b>
	<?php echo CHtml::encode($data->name_of_employer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('include_driver')); ?>:</b>
	<?php echo CHtml::encode($data->include_driver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('include_ppn')); ?>:</b>
	<?php echo CHtml::encode($data->include_ppn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handphone_customer')); ?>:</b>
	<?php echo CHtml::encode($data->handphone_customer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('office_boss')); ?>:</b>
	<?php echo CHtml::encode($data->office_boss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hanphone')); ?>:</b>
	<?php echo CHtml::encode($data->hanphone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user')); ?>:</b>
	<?php echo CHtml::encode($data->create_user); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	*/ ?>
