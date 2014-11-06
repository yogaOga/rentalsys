<?php
/* @var $this MVehicleController */
/* @var $model MVehicle */

$this->breadcrumbs=array(
	'Mvehicles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MVehicle', 'url'=>array('index')),
	array('label'=>'Create MVehicle', 'url'=>array('create')),
	array('label'=>'Update MVehicle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MVehicle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MVehicle', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MVehicle #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name_vehicle',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
