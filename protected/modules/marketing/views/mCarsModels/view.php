<?php
/* @var $this MCarsModelsController */
/* @var $model MCarsModels */

$this->breadcrumbs=array(
	'Mcars Models'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCarsModels', 'url'=>array('index')),
	array('label'=>'Create MCarsModels', 'url'=>array('create')),
	array('label'=>'Update MCarsModels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCarsModels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCarsModels', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MCarsModels #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'vehicle_id',
		'model_name',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
