<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */

$this->breadcrumbs=array(
	'Tbooking Stocks'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List TBookingStock', 'url'=>array('index')),
	array('label'=>'Create TBookingStock', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tbooking-stock-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Tbooking Stocks</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'tbooking-stock-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_Booking_Stock',
		'Booking',
		'Booking_Date',
		'PO_System',
		'PO_Custumer',
		'Custumer_Name',
		/*
		'Address',
		'Contact_Person',
		'Rent_Period',
		'Marketing_Officer',
		'Delivery_Date',
		'Unit',
		'Nomor_Polisi_KBM_Stock_Pool',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>