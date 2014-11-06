<?php
/* @var $this MDriversController */
/* @var $model MDrivers */

$this->breadcrumbs=array(
	'Mdrivers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MDrivers', 'url'=>array('index')),
	array('label'=>'Create MDrivers', 'url'=>array('create')),
	array('label'=>'Update MDrivers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MDrivers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MDrivers', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MDrivers #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'no_driver',
		'driver_name',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
