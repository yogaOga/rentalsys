<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Create Vehicle', 'url'=>array('create')),
	array('label'=>'Update Vehicle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Vehicle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehicle', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View Vehicle #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'merk',
		'year',
		'color',
		'plate_number',
			),
		)); ?>
		</div>
	</div>
</div>
