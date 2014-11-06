<?php
/* @var $this TBookingKendaraanController */
/* @var $data TBookingKendaraan */
?>

<b><?php echo CHtml::encode($data->getAttributeLabel('id_Booking_Kendaraan')); ?>:</b>
<?php echo CHtml::link(CHtml::encode($data->id_Booking_Kendaraan), array('view', 'id' => $data->id_Booking_Kendaraan)); ?>
<br />


<b><?php echo CHtml::encode($data->getAttributeLabel('No_Booking')); ?>:</b>
<?php echo CHtml::encode($data->No_Booking); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Booking_Date')); ?>:</b>
<?php echo CHtml::encode($data->Booking_Date); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('PO_System')); ?>:</b>
<?php echo CHtml::encode($data->PO_System); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('PO_by_Custumer')); ?>:</b>
<?php echo CHtml::encode($data->pOSystem->PO_by_Custumer); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('Customer_Name')); ?>:</b>
<?php echo CHtml::encode($data->Customer_Name); ?>
<br />

<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Custumer')); ?>:</b>
<?php echo CHtml::encode($data->ID_Custumer); ?>
<br />

<?php /*
  <b><?php echo CHtml::encode($data->getAttributeLabel('Address')); ?>:</b>
  <?php echo CHtml::encode($data->Address); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('Contact_Person')); ?>:</b>
  <?php echo CHtml::encode($data->Contact_Person); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('Rent_Period')); ?>:</b>
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

  <b><?php echo CHtml::encode($data->getAttributeLabel('Nomor_Polisi_KBM_GS')); ?>:</b>
  <?php echo CHtml::encode($data->Nomor_Polisi_KBM_GS); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('Jangka_Waktu_GS')); ?>:</b>
  <?php echo CHtml::encode($data->Jangka_Waktu_GS); ?>
  <br />

  <b><?php echo CHtml::encode($data->getAttributeLabel('Alasan_dilakukan_GS')); ?>:</b>
  <?php echo CHtml::encode($data->Alasan_dilakukan_GS); ?>
  <br />

 */ ?>
