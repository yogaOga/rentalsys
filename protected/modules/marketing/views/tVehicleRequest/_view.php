<?php
/* @var $this TVehicleRequestController */
/* @var $data TVehicleRequest */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_Vehicle_Request')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Vehicle_Request), array('view', 'id'=>$data->id_Vehicle_Request)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('No_Request')); ?>:</b>
	<?php echo CHtml::encode($data->No_Request); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Request_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Request_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PO_System')); ?>:</b>
	<?php echo CHtml::encode($data->PO_System); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PO_Custumer')); ?>:</b>
	<?php echo CHtml::encode($data->PO_Custumer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Custumer_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Custumer_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
	<?php echo CHtml::encode($data->Address); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Person')); ?>:</b>
	<?php echo CHtml::encode($data->Contact_Person); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Rent_Period')); ?>:</b>
	<?php echo CHtml::encode($data->Rent_Period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Harga_Sewa')); ?>:</b>
	<?php echo CHtml::encode($data->Harga_Sewa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marketing_Officer')); ?>:</b>
	<?php echo CHtml::encode($data->Marketing_Officer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Delivery_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Delivery_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Unit_merk_type_warna_keluaran')); ?>:</b>
	<?php echo CHtml::encode($data->Unit_merk_type_warna_keluaran); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tambahan_Interior')); ?>:</b>
	<?php echo CHtml::encode($data->Tambahan_Interior); ?>
	<br />

	*/ ?>
