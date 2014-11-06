<?php
/* @var $this MoBookingController */
/* @var $model MoBooking */

$this->breadcrumbs=array(
	'Mo Bookings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MoBooking', 'url'=>array('index')),
	array('label'=>'Manage MoBooking', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MoBooking</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>