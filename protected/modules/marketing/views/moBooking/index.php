<?php
/* @var $this MoBookingController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mo Bookings',
);

$this->menu=array(
	array('label'=>'Create MoBooking', 'url'=>array('create')),
	array('label'=>'Manage MoBooking', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mo Bookings</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>