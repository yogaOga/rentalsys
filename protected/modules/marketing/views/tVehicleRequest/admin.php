<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */

$this->breadcrumbs=array(
	'Tvehicle Requests'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List TVehicleRequest', 'url'=>array('index')),
	array('label'=>'Create TVehicleRequest', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tvehicle-request-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Tvehicle Requests</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'tvehicle-request-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_Vehicle_Request',
		'No_Request',
		'Request_Date',
		'PO_System',
		'PO_Custumer',
		'Custumer_Name',
		/*
		'Address',
		'Contact_Person',
		'Rent_Period',
		'Harga_Sewa',
		'Marketing_Officer',
		'Delivery_Date',
		'Unit_merk_type_warna_keluaran',
		'Tambahan_Interior',
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