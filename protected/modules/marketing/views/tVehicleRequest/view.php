<?php
/* @var $this TVehicleRequestController */
/* @var $model TVehicleRequest */

$this->breadcrumbs=array(
	'Tvehicle Requests'=>array('index'),
	$model->id_Vehicle_Request,
);

$this->menu=array(
	array('label'=>'List TVehicleRequest', 'url'=>array('index')),
	array('label'=>'Create TVehicleRequest', 'url'=>array('create')),
	array('label'=>'Update TVehicleRequest', 'url'=>array('update', 'id'=>$model->id_Vehicle_Request)),
	array('label'=>'Delete TVehicleRequest', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Vehicle_Request),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TVehicleRequest', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View TVehicleRequest #<?php echo $model->id_Vehicle_Request; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id_Vehicle_Request',
		'No_Request',
		'Request_Date',
		'PO_System',
		'PO_Custumer',
		'Custumer_Name',
		'Address',
		'Contact_Person',
		'Rent_Period',
		'Harga_Sewa',
		'Marketing_Officer',
		'Delivery_Date',
		'Unit_merk_type_warna_keluaran',
		'Tambahan_Interior',
			),
		)); ?>
		</div>
	</div>
</div>
