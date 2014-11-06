<?php
/* @var $this MoBookingController */
/* @var $model MoBooking */

$this->breadcrumbs=array(
	'Mo Bookings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MoBooking', 'url'=>array('index')),
	array('label'=>'Create MoBooking', 'url'=>array('create')),
	array('label'=>'View MoBooking', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MoBooking', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MoBooking <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>