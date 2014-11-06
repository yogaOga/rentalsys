<?php
/* @var $this TBookingStockController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbooking Stocks',
);

$this->menu=array(
	array('label'=>'Create TBookingStock', 'url'=>array('create')),
	array('label'=>'Manage TBookingStock', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tbooking Stocks</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>