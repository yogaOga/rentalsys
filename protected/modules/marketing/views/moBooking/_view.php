<?php
/* @var $this MoBookingController */
/* @var $data MoBooking */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('booking_day')); ?>:</b>
	<?php echo CHtml::encode($data->booking_day); ?>
	<br />

