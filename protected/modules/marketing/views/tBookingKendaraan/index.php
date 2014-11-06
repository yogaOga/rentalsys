<?php
/* @var $this TBookingKendaraanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbooking Kendaraans',
);

$this->menu=array(
	array('label'=>'Create TBookingKendaraan', 'url'=>array('create')),
	array('label'=>'Manage TBookingKendaraan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tbooking Kendaraans</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>