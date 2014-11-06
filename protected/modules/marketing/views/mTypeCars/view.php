<?php
/* @var $this MTypeCarsController */
/* @var $model MTypeCars */

$this->breadcrumbs=array(
	'Mtype Cars'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MTypeCars', 'url'=>array('index')),
	array('label'=>'Create MTypeCars', 'url'=>array('create')),
	array('label'=>'Update MTypeCars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MTypeCars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MTypeCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MTypeCars #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'model_car_id',
		'type_name',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
