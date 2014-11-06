<?php
/* @var $this TBookingStockController */
/* @var $data TBookingStock */
?>

<b><?php echo CHtml::encode($data->getAttributeLabel('id_Booking_Stock')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->id_Booking_Stock), array('view', 'id' => $data->id_Booking_Stock)); ?>
<br />


<b><?php echo CHtml::encode($data->getAttributeLabel('Booking')); ?>:</b>
<?php echo CHtml::encode($data->Booking); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Booking_Date')); ?>:</b>
<?php echo CHtml::encode($data->Booking_Date); ?>
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


<b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Person')); ?>:</b>
<?php echo CHtml::encode($data->Contact_Person); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Period_Rent')); ?>:</b>
<?php echo CHtml::encode($data->Rent_Period); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Marketing_Officer')); ?>:</b>
<?php echo CHtml::encode($data->Marketing_Officer); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Delivery_Date')); ?>:</b>
<?php echo CHtml::encode($data->Delivery_Date); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Unit')); ?>:</b>
<?php echo CHtml::encode($data->Unit); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Nomor_Polisi_KBM_Stock_Pool')); ?>:</b>
<?php echo CHtml::encode($data->Nomor_Polisi_KBM_Stock_Pool); ?>
<br />

?>
