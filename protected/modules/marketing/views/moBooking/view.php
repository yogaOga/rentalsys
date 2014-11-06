<?php
/* @var $this MoBookingController */
/* @var $model MoBooking */

$this->breadcrumbs=array(
	'Mo Bookings'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MoBooking', 'url'=>array('index')),
	array('label'=>'Create MoBooking', 'url'=>array('create')),
	array('label'=>'Update MoBooking', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MoBooking', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MoBooking', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MoBooking #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'booking_day',
			),
		)); ?>
		</div>
	</div>
</div>
