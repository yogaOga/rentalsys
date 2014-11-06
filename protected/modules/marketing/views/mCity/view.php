<?php
/* @var $this MCityController */
/* @var $model MCity */

$this->breadcrumbs=array(
	'Mcities'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List MCity', 'url'=>array('index')),
	array('label'=>'Create MCity', 'url'=>array('create')),
	array('label'=>'Update MCity', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete MCity', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MCity', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View MCity #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'regional_id',
		'name_city',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
