<?php
/* @var $this SUserController */
/* @var $model SUser */

$this->breadcrumbs=array(
	'Susers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SUser', 'url'=>array('index')),
	array('label'=>'Create SUser', 'url'=>array('create')),
	array('label'=>'Update SUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SUser', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View SUser #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'username',
		'password',
		'salt',
		'default_group',
		'status_id',
		'created_at',
		'created_by',
		'last_login',
		'photo_path',
			),
		)); ?>
		</div>
	</div>
</div>
